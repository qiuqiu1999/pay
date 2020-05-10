<?php
$config = array (
		//签名方式,默认为RSA2(RSA2048)
		'sign_type' => "RSA2",

		//支付宝公钥
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4TAJbWjnC+e/FBV2GTAAjs4GzkPlq8KG9eQOjiyb7XyUaUpiNAKpz4AD+ChbJ75ZZpQ4ehcmDMaEE6/87JLXrs1cTsGkdGZI3uiseK9dNzKSP2DDgyOAZFI/6qHzxFBc/tHdNeDw3FAJ1d6+EYVQ5WIUodgM5DOMOsfCQKZOV8WWI/1rBC6EE4Bvdm1uN4HkN0yhfLC9/+lf+SZ1PeP1iq23RP2pRrsRmsIQRnVozARq2Xt2YlvAwTQdYa8+vq+8lbZa2OP5zRPj/0THeoZJA1iTvBy8km4SUWddGl+wgFop18MyooqqOzI/kJRE2YuelSYdAlEfVygiphQFq/olTwIDAQAB",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAy5HDhlptXAzZQ2MemC/cLpfxuG9Py3Whvw3PuHTPD5pi5yx26jZvcsVG5uy5sPxGy8XZVdEIlTUhIqoYrbyy7gC2pSz9mC1fxompL9bI9cuKElTP7X6fehIexhh1Sb2lADwVDjhzDMVYbRdnPt+xD+yD8tZn6u93hHnqyfj0UVwHAAiN8PemUhxlkYmRB4QQCILzHjWG/IVuVIuph9bh7PkxbWVPjBhYtqCZyb27CcFR1LvdiVnR4J5CSO2EbbGzB94XtvNzg1erxcKR61SUt9UChFld8wgd7aJYhOtZbyUOgXDcS2TGV+rsPtBlpZ0558tGzFgVU44L6vlEaE2AowIDAQABAoIBAG6bl8pzbcI7NP2ZaLE2KAOlCXC2AnxBQQ5HGdtWlH8c2qpTDZW62BlbOWgVrduNZ4YmzS0EtA4mXQextlEIG4yYFKVw6aV62fRNLgFRScXLvwywyn13dH1mRRRLi8byZSnYe3RLla+VtrMnqTCPaGyHjTYv6yzKynzPpZPyUgW16wXy9rVZVWXlfBPBFVhyrKlk3WcdzkvCrKpvAtH64yLen0AeDLJC8C9JNJqIbVCpY62Zp9l+ueJ4TRx6aSkm/14fzwO/TA5mh1nKKurtwNSaNgdfaixyJjWb12RSn91lFB5nqh/nypsLYhe58TETNyJ0CBUVMDtHOL3g+a1owJkCgYEA+XeLQIT+/pgi1gkI8mdhNSkkCwrlcB68/s0TIgJOrFJJtBFBI/afRX/0cQ6G0hYVMm3hcRp7CJRaTgpe0O/IRmDAfD09YUnHVFxw/Us2lufZjC9TkBFzdaBfYvB6eauTo3P40HjzzpQlCigMu9S/RYoep+2b+F8CHDBBJBYoWqcCgYEA0OaEW4R8dNx725mwzQcoO1CpVJ42uQ7DXT01cfftuic1DLbd49kN0s3Qt4oRpkOlpmLahzY1RQPtK00BAwz0PYxe3q0PtvP5tUOX3xVPgVJhK6AAtdlEhZ90iwyYAr098NU1Ni06Hif9jFBZeOwL4oKlqi9d6wQJPJwhmiOVtaUCgYBnlC4aVN43QV29drTjSO9AjltrxlNrUSfxt55JEaIuxF/bxwo/72dECROqWXi7A/Y7IQpo1rDc6BPysTWbFOQX7JYfP6IbofGEYnl7gd4hnBRks0XD3KsO3M6eGvEPUaEUTdOyY3X/gN08MVLQLk5YhjeiS/LlljUfFR4G6LhKowKBgQC+VUnDGLNMxpcTPrUYGa1OXe/qaTzy38Cg82P+syamtZJgQz1onBs8Nso0cFgkZP5I20jAaWOfvjQZf8+sN+FRMtQ9jvECgMjDnxKA76nA6o4ecWo0RgFoviAxkQfvdv04sQoKkqqhT050ycC7rFYny2Gl7gJkXwkLcDYter6tAQKBgQCrGcZYxtxd2/7hF1eskK7fmn5nC0jxHSsPD21Vgfy87MStUa10+0uxZRvX5n2M59CerIrH1ib/NvidB/Can8CtxtvvBJCyUpb9ajsnOkJbh3uXiwIwpUNzQ4PzsBYR2hLWSi3UNWuHOM7rkerP/bkr4dblbVlc+6zARNjiuakxhw==",

		//编码格式
		'charset' => "UTF-8",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//应用ID
		'app_id' => "2016092900621176",

		//异步通知地址,只有扫码支付预下单可用
		'notify_url' => "http://www.baidu.com",

		//最大查询重试次数
		'MaxQueryRetry' => "10",

		//查询间隔
		'QueryDuration' => "3"
);