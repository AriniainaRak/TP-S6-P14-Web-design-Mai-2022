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

INSERT INTO public.articles
(id, "Titre", "Auteur", resume, contenu, image, created_at, updated_at)
VALUES(2, 'Intelligence artificielle', 'MIT Tech', 'Nous couvrons les dernières avancées en matière d''apprentissage automatique, de réseaux de neurones et de robots.', 'Qu''est-ce que l''IA ? C''est la quête pour construire des machines capables de raisonner, d''apprendre et d''agir intelligemment, et elle vient à peine de commencer. ', '1.jpg', NULL, NULL);
INSERT INTO public.articles
(id, "Titre", "Auteur", resume, contenu, image, created_at, updated_at)
VALUES(3, 'Geoffrey Hinton parle de la « menace existentielle » de l''IA', 'Geoffrey Hinton', 'Regardez Hinton parler avec Will Douglas Heaven, rédacteur en chef de MIT Technology Review pour l''IA, chez EmTech Digital.', 'Conferences videos', '2.jpg', NULL, NULL);
INSERT INTO public.articles
(id, "Titre", "Auteur", resume, contenu, image, created_at, updated_at)
VALUES(4, 'Nous devons apporter le consentement à l''IA ', 'MIT Tech', 'Suit Geoffrey Hinton', 'Plus : Geoffrey Hinton nous explique pourquoi il a maintenant peur de la technologie qu''il a aidé à construire.', '1.jpg', NULL, NULL);
INSERT INTO public.articles
(id, "Titre", "Auteur", resume, contenu, image, created_at, updated_at)
VALUES(5, 'L''avenir de l''IA générative est une niche, pas généralisée', 'MIT Tech', 'Le battage médiatique implacable entourant l''IA générative au cours des derniers mois s''est accompagné d''une angoisse tout aussi forte face aux périls supposés', 'il suffit de regarder la lettre ouverte appelant à une pause dans les expériences d''IA. Ce tumulte risque de nous aveugler sur des risques plus immédiats – pensez à la durabilité et aux préjugés – et obscurcit notre capacité…', '2.jpg', NULL, NULL);
