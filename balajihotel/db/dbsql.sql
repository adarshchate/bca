

/*---Admin Login DB for details---*/
CREATE TABLE `log` ( `lid` INT(3) NOT NULL AUTO_INCREMENT , `usname` VARCHAR(15) NOT NULL , `pass` VARCHAR(15) NOT NULL , PRIMARY KEY (`lid`) KEY_BLOCK_SIZE = 1 USING HASH) ENGINE = InnoDB;

INSERT INTO `log` (`usname`, `pass`) VALUES ('adarsh', 'adarsh0144');

/*----------------------------------------------------------------------*/

/*---creating the MESSAGES table---*/
CREATE TABLE mesg(srno int AUTO_INCREMENT PRIMARY KEY,fname varchar(12),
lname varchar(12),contactus varchar(13),subdate varchar(20),messub TEXT(150));

INSERT INTO `mesg` (`srno`, `fname`, `lname`, `contactus`, `subdate`, `messub`) 
VALUES (NULL, 'adarsh', 'chate', '7097057777', '10-12-2021', 'hiii....');

/*----------------------------------------------------------------------*/

/* creating ROOM_TYPES and price table */


CREATE TABLE `room_type` ( `rty_id` INT(3) PRIMARY KEY, `roomty` VARCHAR(25), `price` INT(8),rtstatus int(3));

INSERT INTO `room_type` (`rty_id`, `roomty`, `price`, `rtstatus`) VALUES ('1', 'standard room', '2000','0'), ('2', 'deluxe room', '4000','0');
INSERT INTO `room_type` (`rty_id`, `roomty`, `price`, `rtstatus`) VALUES ('3', 'family rooms', '8000','0');
INSERT INTO `room_type` (`rty_id`, `roomty`, `price`, `rtstatus`) VALUES ('4', 'luxurious suite', '8500','0');

 
/*----------------------------------------------------------------------*/

/* creating ROOMS numbers and table */
CREATE TABLE rooms(rid int(3),rno varchar(5) PRIMARY KEY,`rty_id` INT(2) REFERENCES `room_type` ( `rty_id`),
status int(3),chkin int(3),chkout int(3),rdelete int(3));

INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('1', 'A101', '1', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('2', 'A102', '1', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('3', 'A103', '1', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('4', 'A104', '1', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('5', 'A105', '1', '0', '0', '0', '0');

INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('6', 'B101', '2', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('7', 'B102', '2', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('8', 'B103', '2', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('9', 'B104', '2', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('10', 'B105', '2', '0', '0', '0', '0');

INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('11', 'C101', '3', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('12', 'C102', '3', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('13', 'C103', '3', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('14', 'C104', '3', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('15', 'C105', '3', '0', '0', '0', '0');

INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('16', 'D101', '4', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('17', 'D102', '4', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('18', 'D103', '4', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('19', 'D104', '4', '0', '0', '0', '0');
INSERT INTO `rooms` (`rid`, `rno`, `rty_id`, `status`, `chkin`, `chkout`, `rdelete`) VALUES ('20', 'D105', '4', '0', '0', '0', '0');


/*----------------------------------------------------------------------*/

/* creating ID CARD TYPE table */
CREATE TABLE `id_card_type` ( `icard_id` INT(3) NOT NULL , `icard_type` VARCHAR(30) NOT NULL , PRIMARY KEY (`icard_id`)) ENGINE = InnoDB;
INSERT INTO `id_card_type` (`icard_id`, `icard_type`) VALUES ('1', 'Aadhar card'), ('2', 'Pan card');
INSERT INTO `id_card_type` (`icard_id`, `icard_type`) VALUES ('3', 'voter id');

/*----------------------------------------------------------------------*/

/* creating CUSTOMER table */
CREATE TABLE customer(cid int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,fname varchar(15),lname varchar(15),
ph_no bigint(13),email varchar(30),`icard_id` INT(3) REFERENCES `id_card_type` ( `icard_id`),id_number varchar(20),
createdate varchar(22),invnum varchar(10),address varchar(40));

/*----------------------------------------------------------------------*/

/* creating Booking table */


CREATE TABLE bookings(bid int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,cid int(5) REFERENCES customer(cid),
rno varchar(5) REFERENCES rooms(rno),rty_id INT(3) REFERENCES room_type(rty_id) ,bdate varchar(22),ckindate varchar(15),ckoutdate
 varchar(15),pkprice int(6),nofday int(3),tprice int(6),remprice varchar(6),paystatus varchar(6),invno varchar(10),bkstatus int(3));

INSERT INTO `bookings` (`bid`, `cid`, `rno`, `rty_id`, `bdate`, `ckindate`, `ckoutdate`, `pkprice`, `nofday`, `tprice`,
 `remprice`, `paystatus`, `invno`, `bkstatus`) VALUES (NULL, '60', '101', '4', '2021', '2021', '2022', '6000', '12', 
 '6000', '0', '0', 'A66', '0');

/*----------------------------------------------------------------------*/
/* creating Booking table  for booking cancellation*/

CREATE TABLE cancelbookings(ccid int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,cid int(5) REFERENCES customer(cid),name varchar(15),
rno varchar(5) REFERENCES rooms(rno),ckindate varchar(15),ckoutdate varchar(15),pkprice int(6),nofday int(3),tprice int(6),invno 
varchar(10),canceldt varchar(22),cancelreas varchar(40),bnkname varchar(30),accno varchar(30),ifscc varchar(20),upiid varchar(40),cancelpaystatus varchar(6));


/*----------------------------------------------------------------------*/
/* creating cancel payments*/

CREATE TABLE cancelpayment(cpid int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,ccid int(5) REFERENCES cancelbookings(ccid),
transactionid varchar(40),pamount varchar(9),reduceper varchar(5),paidamount varchar(9),paiddate varchar(25),
profit_amt varchar(10));


/*----------------------------------------------------------------------*/
/* creating Employee Designation */
CREATE TABLE empdgon (edid INT(3) PRIMARY KEY, edname VARCHAR(25),esalary varchar(9),edstatus int(3));

INSERT INTO `empdgon` (`edid`, `edname`, `esalary`, `edstatus`) VALUES ('1', 'Restaurant Manager', '25000', '0'), 
('2', 'Kitchen Staff', '18000', '0');
INSERT INTO `empdgon` (`edid`, `edname`, `esalary`, `edstatus`) VALUES ('3', 'Room Service', '15000', '0');

/*----------------------------------------------------------------------*/


/* creating Employees  */
CREATE TABLE empdetail(eid int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,efname varchar(15),elname varchar(15),
eph_no bigint(13),eemail varchar(30),`icard_id` INT(3) REFERENCES `id_card_type` ( `icard_id`),
eid_number varchar(20),createdate varchar(22),edname VARCHAR(35) REFERENCES empdgon(edname),eaddress varchar(45),estatus int(3));

INSERT INTO `empdetail` (`eid`, `efname`, `elname`, `eph_no`, `eemail`, `icard_id`, `eid_number`, `createdate`, `edname`, `eaddress`, `estatus`) 
VALUES (NULL, 'adarsh', 'chate', '7097057777', 'adarsh@', '1', '324011008250', '2022', 'Restaurant Manager', 'pune', '0');

/*----------------------------------------------------------------------*/

/* creating Employee attendance table  */

CREATE TABLE empattend(aeid int(5) PRIMARY KEY AUTO_INCREMENT,eid int(5) 
REFERENCES empdetail(eid),achkdate varchar(25),eastatus int(3),eapaystatus int(3));




/*----------------------------------------------------------------------*/
