This project is a medical staff management web application .
We used for the front end : HTML, CSS, Javascript and Bootstrap (Framework) .
for the back end we used : PHP, Javascript and MYSQL.

In order for this website to work properly you need to  ( we will run it locally ): 
1) Install a software that will run the php code : we propose WAMP or XAMPP 

2)Run WAMP or XAMPP

3) Set the database necessary for the sign in / sign up system: 
	a/Open your browser 
	b/Type localhost/phpmyadmin/ then for the username : root 
				                  password : (leave it empty )
then click on "go" 

 4)click on "Databases" ( Bases de données )  then write inside the Database Name : "staff_medical_projet" then click on "create"

5)click on the "SQL" tab up top and then write this SQL code to create the first table :
  CREATE TABLE `patients` (
  `idPatient` int(11) NOT NULL,
  `nomPatient` varchar(40) NOT NULL,
  `prenomPatient` varchar(40) NOT NULL,
  `emailPatient` varchar(255) NOT NULL,
  `telPatient` int(11) NOT NULL,
  `rdv` date NOT NULL,
  `etatPatient` enum('En cours','Absent','Present','') NOT NULL DEFAULT 'En cours',
  `Groupes_sanguins` enum('A+','A-','B+','B-','O+','O-','AB+','AB-') NOT NULL,
  `Vaccin` varchar(255) NOT NULL,
  `Note` text NOT NULL,
  `idStaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

6) click "go" or "execute" 

7) Now we need to create the second table :
	a)click on "staff_medical_projet"(which is the name of our database )
	b)click on the SQL tab up top and then write this SQL code to create the second table : 
	CREATE TABLE `seance` (
  `idseance` int(11) NOT NULL,
  `dateseance` date NOT NULL,
  `heuredebut` time NOT NULL,
  `heurefin` time NOT NULL,
  `presence` tinyint(1) NOT NULL,
  `remplacant` text NOT NULL,
  `idStaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

8) click "go" or "execute" 
9) Now we need to create the third table :
	a)click on "staff_medical_projet"(which is the name of our database )
	b)click on the SQL tab up top and then write this SQL code to create the second table : 
	CREATE TABLE `specialites` (
  `idspecialite` int(11) NOT NULL,
  `fonction` varchar(40) NOT NULL,
  `nomspecialite` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

10) click "go" or "execute"
11) Now we need to create the forth table :
	a)click on "loginsystemtut" (which is the name of our database )
	b)click on the SQL tab up top and then write this SQL code to create the second table : 
	CREATE TABLE `staff` (
  `idStaff` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idspecialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


12) click "go" or "execute"

13)Everything is set up inside the database , now copy the folder and go inside the installation folder of the software "wamp" then the folder "www" then paste it there .

14)Now open any browser you want and enter the url (folder path) to use it .

Note : 
The steps above are only followed when you try to use the website for the first time  ( because we need to set the database ) otherwise you ignore them and do these two steps : 

15)Run the software "WAMP" or "XAMPP"

16)open any browser you want and enter to use the website 