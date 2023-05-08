CREATE TABLE articles (
	id bigserial NOT NULL,
	"Titre" varchar(255) NOT NULL,
	"Auteur" varchar(255) NOT NULL,
	resume varchar(255) NOT NULL,
	contenu text NOT NULL,
	image varchar(255) NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	CONSTRAINT articles_pkey PRIMARY KEY (id)
);

CREATE TABLE users (
	id bigserial NOT NULL,
	"name" varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	"password" varchar(255) NOT NULL,
	remember_token varchar(100) NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	CONSTRAINT users_email_unique UNIQUE (email),
	CONSTRAINT users_pkey PRIMARY KEY (id)
);