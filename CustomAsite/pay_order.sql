CREATE TABLE `pay_order` (
  `id` int(100) NOT NULL,
  `PaymerchantID` varchar(200) NOT NULL,
  `OrderId` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CurrencyType` varchar(4) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `ProductName1` varchar(200) NOT NULL,
  `Quantity1` varchar(150) NOT NULL,
  `addTime` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `pay_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
