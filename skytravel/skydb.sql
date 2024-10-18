




/*---Admin Login DB for details---*/
CREATE TABLE log(usname varchar(10),pass varchar(10));
INSERT INTO `log` (`usname`, `pass`) VALUES ('adarsh', 'adarsh');



/*---- create table for contact us details ----*/
CREATE TABLE mesg(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),
lname varchar(12),contactus varchar(13),subdate varchar(20),messub TEXT(150));

INSERT INTO `mesg` (`srno`, `fname`, `lname`, `contactus`, `subdate`, `messub`)
VALUES (NULL, 'Adarsh', 'Chate', '7097057777', '07-07-2021', 'hii im adarsh');



/*---create table solapur to panvel DAY for MH13AY5555 --5---*/
CREATE TABLE stop_d(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),lname varchar(12),
contactno varchar(13),bookid varchar(10),submitdate varchar(20),tfrom varchar(10),tto varchar(10),
dy_nt varchar(3),travdate varchar(15),bustime varchar(15),busno varchar(12),priceper varchar(5),
seatqty int(3),totalfare varchar(8));

INSERT INTO `stop_d` (`srno`, `fname`, `lname`, `contactno`, `bookid`, `submitdate`, 
`tfrom`, `tto`, `dy_nt`, `travdate`, `bustime`, `busno`, `priceper`, `seatqty`, `totalfare`)
 VALUES (NULL, 'adarsh', 'chate', '7097057777', 'TR7777', '06-06-2021', 'solapur', 'panvel', 
 'D', '15-12-2021', '07:00am-02:00pm', 'MH13AY5555', '777', '30', '23,310');

/*---create table  panvel to solapur NIGHT for MH13AY5555 --5---*/
CREATE TABLE ptos_n(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),lname varchar(12),
contactno varchar(13),bookid varchar(10),submitdate varchar(20),tfrom varchar(10),tto varchar(10),
dy_nt varchar(3),travdate varchar(15),bustime varchar(15),busno varchar(12),priceper varchar(5),
seatqty int(3),totalfare varchar(8));

INSERT INTO `ptos_n` (`srno`, `fname`, `lname`, `contactno`, `bookid`, `submitdate`, 
`tfrom`, `tto`, `dy_nt`, `travdate`, `bustime`, `busno`, `priceper`, `seatqty`, `totalfare`)
 VALUES (NULL, 'adarsh', 'chate', '7097057777', 'TR7777', '06-06-2021','panvel', 'solapur',  
 'N', '15-12-2021', '07:00pm-02:00am', 'MH13AY5555', '777', '30', '23,310');


/*---create table  panvel to solapur Day for MH46QW7777--7---*/
CREATE TABLE ptos_d(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),lname varchar(12),
contactno varchar(13),bookid varchar(10),submitdate varchar(20),tfrom varchar(10),tto varchar(10),
dy_nt varchar(3),travdate varchar(15),bustime varchar(15),busno varchar(12),priceper varchar(5),
seatqty int(3),totalfare varchar(8));

INSERT INTO `ptos_d` (`srno`, `fname`, `lname`, `contactno`, `bookid`, `submitdate`,
`tfrom`, `tto`, `dy_nt`, `travdate`, `bustime`, `busno`, `priceper`, `seatqty`, `totalfare`)
VALUES (NULL, 'Adarsh', 'Chate', '7097057777', 'TRAC7777', '07-06-2021', 'panvel', 'solapur',
'D', '12-12-2021', '08:00am-02:00pm', 'MH46QW7777', '700', '7', '4900');

/*---create table solapur to panvel NIGHT for MH46QW7777--7---*/
CREATE TABLE stop_n(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),lname varchar(12),
contactno varchar(13),bookid varchar(10),submitdate varchar(20),tfrom varchar(10),tto varchar(10),
dy_nt varchar(3),travdate varchar(15),bustime varchar(15),busno varchar(12),priceper varchar(5),
seatqty int(3),totalfare varchar(8));

INSERT INTO `stop_n` (`srno`, `fname`, `lname`, `contactno`, `bookid`, `submitdate`,
`tfrom`, `tto`, `dy_nt`, `travdate`, `bustime`, `busno`, `priceper`, `seatqty`, `totalfare`)
VALUES (NULL, 'Adarsh', 'Chate', '7097057777', 'TRAC7777', '07-06-2021', 'solapur', 'panvel',
'N', '12-12-2021', '08:00pm-02:00am', 'MH46QW7777', '700', '7', '4900');



/*---create table for travelling pakages details----*/
CREATE TABLE travelpakages(srno int AUTO_INCREMENT PRIMARY KEY,Packagename varchar(15),bookingid varchar(10),
fname varchar(15),lname varchar(15),contactno varchar(13),submitdate varchar(20),tdate varchar(15),seatqty int(3),
pakageamt varchar(8),totalbill varchar(10));

INSERT INTO `travelpakages` (`srno`, `Packagename`, `bookingid`, `fname`, `lname`, `contactno`, `submitdate`,
`tdate`, `seatqty`, `pakageamt`, `totalbill`) VALUES (NULL, 'shimla', 'AC7777', 'adarsh', 'chate', '7097057777',
'05-06-2021 11:42pm', '15-12-2021', '2', '500', '1000');

