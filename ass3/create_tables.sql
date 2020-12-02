CREATE table student ( sid int (10)  PRIMARY key auto_increment,
name VARCHAR (50), branch varchar (10) , CPI FLOAT, phone VARCHAR (15) ,email VARCHAR (50));


CREATE table company ( cid int (10)  PRIMARY key auto_increment, 
co_name VARCHAR (50), place  varchar (30) , phone VARCHAR (15) ,email VARCHAR (50));


CREATE table company_interest ( cid int (10),  branch varchar (10),seats int (10), package FLOAT (10));



CREATE table intrested_in_company ( cid int (10),  FOREIGN key (cid)  REFERENCES company(cid), sid  int (10),  FOREIGN key (sid)  REFERENCES student (sid)); 


CREATE table available_dates ( cid int (10) ,  FOREIGN key (cid)  REFERENCES company(cid), c_date date ); 


CREATE table Schedule ( cid int (10),  FOREIGN key (cid)  REFERENCES company(cid), date date ); 



CREATE table Selection ( cid int (10),  FOREIGN key (cid)  REFERENCES company(cid), sid  int (10),  FOREIGN key (sid)  REFERENCES student (sid)); 