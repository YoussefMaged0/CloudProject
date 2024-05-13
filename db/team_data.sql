

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `team_data` (
  `STUDENT_NAME` varchar(40) NOT NULL,
  `ID` int NOT NULL,
  `AGE` int NOT NULL,
  `CGPA` decimal(3,2) NOT NULL,
  `SEMESTER` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `team_data` (`STUDENT_NAME`, `ID`, `AGE`, `CGPA`, `SEMESTER`) VALUES
('omar osama', 22010157, 20, 3.50, 4),
('youssef adel', 22010306, 20, 4.00, 4),
('youssef maged', 22010310, 20, 4.00, 4),
('youssef mohamed', 22010311, 20, 4.00, 4),
('abdallah gamal', 22010366, 19, 3.99, 4);


ALTER TABLE `team_data`
  ADD PRIMARY KEY (`ID`);
COMMIT;

