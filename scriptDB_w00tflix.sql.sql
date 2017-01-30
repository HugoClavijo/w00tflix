
CREATE DATABASE w00tflix
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'es_EC.UTF-8'
       LC_CTYPE = 'es_EC.UTF-8'
       CONNECTION LIMIT = -1;

CREATE TABLE public.categorias
(
  idcategorias integer NOT NULL,
  nombre character varying(20),
  descipcion character varying(30),
  CONSTRAINT "PK" PRIMARY KEY (idcategorias),
  CONSTRAINT unico UNIQUE (idcategorias)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.categorias
  OWNER TO postgres;


CREATE TABLE public.comentarios
(
  idcomentarios integer NOT NULL,
  idusuario integer,
  idvideo integer,
  comentario character varying(140),
  CONSTRAINT "PKCOMENTARIOS" PRIMARY KEY (idcomentarios)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.comentarios
  OWNER TO postgres;

CREATE TABLE public.detalle_videos
(
  iddetalles integer NOT NULL,
  descripcion character varying(30),
  CONSTRAINT "PKDETALLES" PRIMARY KEY (iddetalles)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.detalle_videos
  OWNER TO postgres;