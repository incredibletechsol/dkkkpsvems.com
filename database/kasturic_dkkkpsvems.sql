DROP TABLE IF EXISTS tbl_enquiry;

CREATE TABLE `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE IF EXISTS tbl_faculty;

CREATE TABLE `tbl_faculty` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` int(2) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

INSERT INTO tbl_faculty VALUES("2","Teaching","Ms. Dombale Neelam Shrimant ","Vice Principal ","MA. B.Ed. ","1","Ms. Dombale Neelam Shrimant .jpg");
INSERT INTO tbl_faculty VALUES("3","Teaching","Mrs. Sawant Chaya Uday","KG Teacher","B.A.MONT.","1","Mrs. Sawant Chaya Uday.JPG");
INSERT INTO tbl_faculty VALUES("4","Teaching","Miss. Athani Kunda Annappa","Mont. Teacher","B.A.B.ED.","1","Miss. Athani Kunda Annappa.JPG");
INSERT INTO tbl_faculty VALUES("5","Teaching","Miss. Rupnawar Bharati V.","KG Teacher","B.A.B.ED.","1","Miss. Rupnawar Bharati V..jpg");
INSERT INTO tbl_faculty VALUES("8","Teaching","Mrs. Thorat Rupali Shahaji","KG Teacher","M.A. (Mont)","1","Mrs. Thorat Rupali Shahaji.jpg");
INSERT INTO tbl_faculty VALUES("74","Teaching","Mrs. Gaikwad Renuka Dipak","KG Teacher","B.A. B.Ed ","1","Mrs. Gaikwad Renuka Dipak.jpg");
INSERT INTO tbl_faculty VALUES("13","Teaching","Mrs. Jadhav Charushila Sagar","KG Teacher","H.S.C. D.TED","1","Mrs. Jadhav Charushila Sagar.jpg");
INSERT INTO tbl_faculty VALUES("14","Teaching","Ms. Gaikwad Monika Yuvraj","KG Teacher","B.A. B.ed. ","1","Ms. Gaikwad Monika Yuvraj.jpg");
INSERT INTO tbl_faculty VALUES("16","Teaching","Mrs. Ranaware Ashwini Rahul","KG Teacher","H.S.C. D.TED","1","Mrs. Ranaware Ashwini Rahul.JPG");
INSERT INTO tbl_faculty VALUES("17","Teaching","Mrs. Bhatiya Anita Sanjay","Vice Principal","M.A. B.ed","1","Mrs. Bhatiya Anita Sanjay.JPG");
INSERT INTO tbl_faculty VALUES("21","Teaching","Mrs. Lawate Manisha Baban","Assistant Teacher","B.A. D.TED","1","Mrs. Lawate Manisha Baban.JPG");
INSERT INTO tbl_faculty VALUES("23","Teaching","Miss. Londhe Vaishali Sakharam","Assistant Teacher","H.S.C. D.TED","1","Miss. Londhe Vaishali Sakharam.jpg");
INSERT INTO tbl_faculty VALUES("26","Teaching","Mr. Attar Rajjak Motilal","Assistant Teacher","B.A. D.TED","1","Mr. Attar Rajjak Motilal.jpg");
INSERT INTO tbl_faculty VALUES("27","Teaching","Mr. Sorate Nitin  Lalaso","Physical Teacher","H.S.C. (Karate) ","1","Mr. Sorate Nitin  Lalaso.JPG");
INSERT INTO tbl_faculty VALUES("29","Teaching","Ms. Sabale Anita Vijay","Assistant Teacher","B.S.C. D.Ed","1","Ms. Sabale Anita Vijay.JPG");
INSERT INTO tbl_faculty VALUES("31","Teaching","Mr. Bhise Kalawant Mohan","Art Teacher","Mr. Bhise Kalawant Mohan","1","Mr. Bhise Kalawant Mohan.JPG");
INSERT INTO tbl_faculty VALUES("32","Teaching","Mr. Kokare Amol Narayan","Art Teacher","H.S.C. A.T.D.","1","Mr. Kokare Amol Narayan.JPG");
INSERT INTO tbl_faculty VALUES("33","Teaching","Smt. Bhosale Swati Malojiraje","Art Teacher","A.T.D.","1","Smt. Bhosale Swati Malojiraje.JPG");
INSERT INTO tbl_faculty VALUES("37","Teaching","Mrs. Thengal Surekha A.","Assistant Teacher","H.S.C. D.TED","1","Mrs. Thengal Surekha A..JPG");
INSERT INTO tbl_faculty VALUES("40","Teaching","Mrs. Gaikwad Sandhya Pramod","Assistant Teacher","M.A. (Eng) B.ED.","1","Mrs. Gaikwad Sandhya Pramod.JPG");
INSERT INTO tbl_faculty VALUES("42","Teaching","Mr. Kambale Pravin Baji","Assistant Teacher","MA. B.ed. English","1","Mr. Kambale Pravin Baji.JPG");
INSERT INTO tbl_faculty VALUES("45","Teaching","Miss. Jadhav Jayashri Dattatray","KG Teacher","H.S.C.D.ED.","1","Miss. Jadhav Jayashri Dattatray.jpg");
INSERT INTO tbl_faculty VALUES("51","Teaching","Mr. Sutar Sudarshan Vitthal","Music Teacher","B.A. Music","1","Mr. Sutar Sudarshan Vitthal.JPG");
INSERT INTO tbl_faculty VALUES("54","Teaching","Mr. Mulani Akbar Innus ","Assistant Teacher","B.A. B.ed. ","1","Mr. Mulani Akbar Innus .JPG");
INSERT INTO tbl_faculty VALUES("55","Teaching","Mr. Pathan Samir Vazirkhan","Physical Teacher","MA. B.Ed. & B.P. Ed. ","1","Mr. Pathan Samir Vazirkhan.jpg");
INSERT INTO tbl_faculty VALUES("56","Non-Teaching","Mr. Patil Nitin Ramdas","Clerk","B.A.","9","Mr. Patil Nitin Ramdas.jpg");
INSERT INTO tbl_faculty VALUES("59","Non-Teaching","Mr. More Dnyaneshwar Ganpat","Carpenter","--------","1","Mr. More Dnyaneshwar Ganpat.jpg");
INSERT INTO tbl_faculty VALUES("60","Non-Teaching","Mr. Parse Sunil Ramchandra","Peon","H.S.C","1","Mr. Parse Sunil Ramchandra.JPG");
INSERT INTO tbl_faculty VALUES("65","Non-Teaching","Mrs. Sutar Kanchan Vilas","Ladies Assistant","S.S.C.","1","Mrs. Sutar Kanchan Vilas.JPG");
INSERT INTO tbl_faculty VALUES("66","Non-Teaching","Mrs. Dhainje Kavita Rajendra ","Ladies Assistant","S.S.C.","1","Mrs. Dhainje Kavita Rajendra .JPG");
INSERT INTO tbl_faculty VALUES("72","Non-Teaching","Mrs. Waghela Manisha Kanvar","Sweaper","--------","1","Mrs. Waghela Manisha Kanvar.jpg");
INSERT INTO tbl_faculty VALUES("82","Non-Teaching","Mrs. Shirke Usha Mohan","Ladies Assistant","S.S.C.","1","Mrs. Shirke Usha Mohan.JPG");



DROP TABLE IF EXISTS tbl_gallery;

CREATE TABLE `tbl_gallery` (
  `photoid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

INSERT INTO tbl_gallery VALUES("65","IMG_4163.JPG","Ashadhi Ekadashi");
INSERT INTO tbl_gallery VALUES("66","IMG_4287.JPG","Ashadhi Ekadashi");
INSERT INTO tbl_gallery VALUES("69","IMG_4583.JPG","Tree Plantation Activity");
INSERT INTO tbl_gallery VALUES("79","IMG_5163.JPG","Krushna Janmashtmi Celebration");
INSERT INTO tbl_gallery VALUES("80","IMG_5213.JPG","Krushna Janmashtmi Celebration");
INSERT INTO tbl_gallery VALUES("81","IMG_5183.JPG","Krushna Janmashtmi Celebration");
INSERT INTO tbl_gallery VALUES("82","IMG_5322.JPG","Sports Day Celebration");
INSERT INTO tbl_gallery VALUES("83","IMG_5261.JPG","Sports Day Celebration");



DROP TABLE IF EXISTS tbl_login;

CREATE TABLE `tbl_login` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tbl_login VALUES("1","svemsadmin","Phadtare12#$","Sandip","Pansare");



DROP TABLE IF EXISTS tbl_news;

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsdate` date NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;




