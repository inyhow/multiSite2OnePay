CREATE TABLE `orderAgent` (
  `id` int(120) NOT NULL,
  `paymerchantid` varchar(100) NOT NULL,
  `OrderId` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CurrencyType` varchar(4) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Signature` varchar(32) NOT NULL,
  `ProductName1` varchar(200) NOT NULL,
  `Price1` varchar(10) NOT NULL,
  `Language` varchar(4) NOT NULL,
  `Sku1` varchar(100) NOT NULL,
  `Quantity1` varchar(10) NOT NULL,
  `ShippingFirstName` varchar(100) NOT NULL,
  `ShippingLastName` varchar(100) NOT NULL,
  `ShippingAddress1` varchar(100) NOT NULL,
  `ShippingAddress2` varchar(100) NOT NULL,
  `ShippingCity` varchar(100) NOT NULL,
  `ShippingCountry` varchar(2) NOT NULL,
  `ShippingState` varchar(100) NOT NULL,
  `ShippingZipcode` varchar(20) NOT NULL,
  `ShippingTelephone` varchar(20) NOT NULL,
  `BillingFirstName` varchar(100) NOT NULL,
  `BillingLastName` varchar(100) NOT NULL,
  `BillingAddress1` varchar(100) NOT NULL,
  `BillingAddress2` varchar(100) NOT NULL,
  `BillingCity` varchar(100) NOT NULL,
  `BillingCountry` varchar(2) NOT NULL,
  `BillingState` varchar(100) NOT NULL,
  `BillingZipcode` varchar(20) NOT NULL,
  `BillingTelephone` varchar(20) NOT NULL,
  `ReturnUrl` varchar(255) NOT NULL,
  `NotifyUrl` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `orderAgent`
--


ALTER TABLE `orderAgent`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `orderAgent`
--
ALTER TABLE `orderAgent`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
