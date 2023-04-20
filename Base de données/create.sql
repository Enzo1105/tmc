-- Définit le moteur par défaut
SET default_storage_engine=InnoDb;

Create table Animal (
	id int auto_increment primary key,
	nom varchar(10) not null,
    idArtisan int not null
);

Create table Artisan (
	id int auto_increment primary key,
	nom varchar(30) not null,
	prenom varchar(30) not null,
	ville varchar(30) not null,
	codePostal varchar(5) not null,
	telephone varchar(10) null,
	unique (nom, prenom)
);

Create table Viande (    
	id int auto_increment primary key,
	nom varchar (30) not null,
	description text not null,
	infocuisson text not null,
	photo varchar(100) null,
	idAnimal int not null,
	Foreign key (idAnimal) references Animal (id)
);

Create table Commande (
	id int auto_increment primary key,
	prix decimal(3,2) not null ,
	poids decimal(1,1) not null,
	quantite int,
	dateCommande date,
	idViande int not null,
	idClient int not null,
	Foreign key (idViande) references Viande (id),
	Foreign key (idClient) references Client (id)
) ;

Create table Client (
	id int primary key,
	login varchar (30) not null,
	password varchar (64) not null,
	prenom varchar (30) not null,
	nom varchar (30) not null,
    adresse varchar (60) not null,
    ville varchar (30) not null,
	codePostal varchar (5) not null,
    telephone varchar (10) not null
);


