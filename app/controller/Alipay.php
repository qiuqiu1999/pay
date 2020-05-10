<?php

namespace app\controller;



use app\BaseController;
use app\lib\phpqrcode\QRcode;
use Alipay\EasySDK\Payment\Page\Client;
use think\App;
use Alipay\EasySDK\Kernel\Factory;
use Alipay\EasySDK\Kernel\Config;

class Alipay extends BaseController
{
    //2088102178920183

    public function __construct(App $app)
    {
        parent::__construct($app);
        Factory::setOptions($this->getOptions());
    }

    /**
     * 初始化配置
     * @return Config
     */
    function getOptions()
    {
        $config = config('alipay');
        $options = new Config();
        $options->protocol = 'http';
        $options->gatewayHost = 'openapi.alipaydev.com';// $config['gateway_url']; // 'openapi.alipay.com';
        $options->signType = $config['sign_type'];
        $options->appId = $config['app_id'];
        // 为避免私钥随源码泄露，推荐从文件中读取私钥字符串而不是写入源码中
        $options->merchantPrivateKey = $config['merchant_private_key'];
//        $options->alipayCertPath = '<-- 请填写您的支付宝公钥证书文件路径，例如：/foo/alipayCertPublicKey_RSA2.crt -->';
//        $options->alipayRootCertPath = '<-- 请填写您的支付宝根证书文件路径，例如：/foo/alipayRootCert.crt" -->';
//        $options->merchantCertPath = '<-- 请填写您的应用公钥证书文件路径，例如：/foo/appCertPublicKey_2019051064521003.crt -->';
        //注：如果采用非证书模式，则无需赋值上面的三个证书路径，改为赋值如下的支付宝公钥字符串即可
        $options->alipayPublicKey = $config['alipay_public_key'];
        //可设置异步通知接收服务地址（可选）
//        $options->notifyUrl = "<-- 请填写您的支付类接口异步通知接收服务地址，例如：https://www.test.com/callback -->";
        //可设置AES密钥，调用AES加解密相关接口时需要（可选）
//        $options->encryptKey = "<-- 请填写您的AES密钥，例如：aa4BtZ4tspm2wnXLb1ThQA== -->";
        return $options;
    }

    /**
     * 生成二维码
     */
//    public function index() {
//        echo "<img src='https://pay.singwa666.com/qcode/index.html?data=weixin%3A%2F%2Fwxpay%2Fbizpayurl%3Fpr%3D436MP2H'>";
//    }

    public function index()
    {
        return view('pc_alipay');
    }

    /**
     * 网页付款
     * @return string
     * @throws \Exception
     */
    public function pagepay()
    {
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $outTradeNo = input('param.WIDout_trade_no', '', 'trim');
        //订单名称，必填
        $subject = input('param.WIDsubject', '', 'trim');
        //付款金额，必填
        $totalAmount = input('param.WIDtotal_amount', '', 'trim');
        //商品描述，可空
        $body = input('param.WIDbody', '', 'trim');

        try {
            $result = Factory::payment()->page()->pay($outTradeNo, $subject, $totalAmount);
            return $result->body;
        } catch (Exception $e) {
            // TODO 记录错误日志
            // return view(''); // 返回静态出错页面
            echo $e->getMessage();
        }
    }

    public function query()
    {
        // 商户订单号，商户网站订单系统中唯一订单号
        $outTradeNo = input('WIDTQout_trade_no', '', 'trim');
        // 支付宝交易号
        // $trade_no = trim($_POST['WIDTQtrade_no']);
        try {
            $result = Factory::payment()->common()->query($outTradeNo);
            if (!isset($result->code) || $result->code != '10000') {
                return $result->subMsg;
            }
        } catch (\Exception $e) {
            // TODO 记录错误日志
            echo $e->getMessage();
        }
        dd($result);
    }


}