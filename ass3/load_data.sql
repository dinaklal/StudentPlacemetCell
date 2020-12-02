LOAD DATA  local INFILE 'C:/Users/lals/Desktop/MTech/CS620/ass3/student.csv'
INTO TABLE student

FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;

LOAD DATA  local INFILE 'C:/Users/lals/Desktop/MTech/CS620/ass3/company.csv'
INTO TABLE company

FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;



LOAD DATA  local INFILE 'C:/Users/lals/Desktop/MTech/CS620/ass3/company_interest.csv'
INTO TABLE company_interest

FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;



LOAD DATA  local INFILE 'C:/Users/lals/Desktop/MTech/CS620/ass3/interested.csv'
INTO TABLE intrested_in_company

FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;


LOAD DATA  local INFILE 'C:/Users/lals/Desktop/MTech/CS620/ass3/dates.csv'
INTO TABLE available_dates

FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES;

