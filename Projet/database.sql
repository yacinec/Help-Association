


CREATE DATABASE projet;


CREATE TABLE membre (
	idMembre int NOT NULL AUTO_INCREMENT,
	pseudo varchar,
	nom varchar,
	prenom varchar,
	email text,
	password text,
	telephone varchar,
	adresse text,
	droit boolean,
	PRIMARY KEY (idMembre)
);

CREATE TABLE article (
	idArticle int NOT NULL AUTO_INCREMENT,
	idAuteur int NOT NULL,
	titre text,
	contenu text,
	theme varchar,
	PRIMARY KEY (idMembre, idAuteur),
	CONSTRAINT FK_article idAuteur REFERENCES membre(idMembre)
);

CREATE TABLE don (
	idDon int NOT NULL AUTO_INCREMENT,
	idAuteur int NOT NULL,
	prix float,
	dateDon date,
	PRIMARY KEY (idDon),
	CONSTRAINT FK_don idAuteur REFERENCES membre(idMembre)
);

CREATE TABLE mission (
	idMission int NOT NULL AUTO_INCREMENT,
	lieu varchar,
	dateMission date,
	heureDebut time,
	heureFin time,
	descriptionMission text,
	PRIMARY KEY (idMission)
);


CREATE TABLE motcle (
	idMot int NOT NULL AUTO_INCREMENT,
	mot varchar,
	PRIMARY KEY (idMot)
);

CREATE TABLE commentaire (
	idCommentaire int NOT NULL AUTO_INCREMENT,
	idAuteur int NOT NULL,
	idArticle int NOT NULL,
	commentaire text,
	PRIMARY KEY (idCommentaire, idAuteur, idArticle),
	CONSTRAINT FK_commentaire_auteur idAuteur REFERENCES membre(idMembre),
	CONSTRAINT FK_commentaire_article idArticle REFERENCES article(idArticle)
);

CREATE TABLE messagecontact (
	idMessage int NOT NULL AUTO_INCREMENT,
	idAuteur int NOT NULL,
	sujet text,
	message text,
	PRIMARY KEY (idCommentaire, idAuteur),
	CONSTRAINT FK_commentaire_auteur idAuteur REFERENCES membre(idMembre)
);
