# ReactKonecta

Sentencias SQL
Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
$products = products::select('name', 'stock')->orderBy('stock', 'desc')->first();

Realizar una consulta que permita conocer cuál es el producto más vendido.
$products = products::select('name', 'reference', 'price', 'weigth', 'category', 'stock', 'date')->orderBy('stock', 'desc')->first();

Base de datos
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `reference` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `weigth` int(11) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `products` (`id`, `name`, `reference`, `price`, `weigth`, `category`, `stock`, `date`) VALUES
(1, 'Pan Tostado', 101, 1200, 200, 'Parva', 20, '2022-08-16');

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
