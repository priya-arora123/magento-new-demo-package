<?php
namespace YMSLI\Demo\Plugin;


    class Cart
	{
		public function afterAddProduct(
			\Magento\Checkout\Model\Cart $subject,
			$productInfo,
			$requestInfo = null
		) {
			$requestInfo['qty'] = 10; // increasing quantity to 10
			return array($productInfo, $requestInfo);
		}
	}