
CREATE TABLE  `loginformdb` (
  `Name` varchar(50) NOT NULL,
  `Fathername` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Blood` varchar(50) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Qual` varchar(50) NOT NULL,
  `Income` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `security_question` varchar(50) NOT NULL,
  PRIMARY KEY (`Username`)
) 

INSERT INTO `loginformdb` (`Name`, `Fathername`, `Address`, `Gender`, `DOB`, `Blood`, `Mobile`, `Email`, `Qual`, `Income`, `Username`, `Password`, `security_question`) VALUES
('Aniket Kumar', 'Sunil Kumar Gupta', 'Ganga Mahal', 'male', '1998-07-24', 'B+', 9878987898, 'ani99ket@gmail.com', 'M.tech', '10,00,000 and above', 'Aniket', 'abc', 'Vistas'),
('shivangi', 'sunil', 'abc', 'female', '2017-01-11', 'B+', 9999999999, 'shiv@gmail.com', 'mtech', '1000000 and above', 'shivangi', 'gupta', 'Harry Potter'),
('sudhanshu gupta', 'sunil Kumar', 'kirani ghat', 'male', '2005-06-07', 'AB+', 9789698765, 'sud@gmail.com', 'Mba', '2,50,000 to 5,00,000', 'sud', 'abc', 'whitetiger');

