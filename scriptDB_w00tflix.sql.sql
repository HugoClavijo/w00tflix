
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
  
  CREATE TABLE public.historial
(
  idhistorial integer NOT NULL,
  idusuario integer,
  idvideo integer,
  fecha_entrada date,
  hora_entrada time(6) with time zone,
  CONSTRAINT "PKHISTORIAL" PRIMARY KEY (idhistorial)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.historial
  OWNER TO postgres;

CREATE TABLE public.lista_favoritas
(
  idlista_favoritos integer NOT NULL,
  idusuario integer,
  idvideo integer,
  CONSTRAINT "PKFAVORITOS" PRIMARY KEY (idlista_favoritos)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.lista_favoritas
  OWNER TO postgres;

CREATE TABLE public.mensajes_enviados
(
  idmensaje_enviado integer NOT NULL,
  idusuario integer,
  mensaje character varying(140),
  CONSTRAINT "PKMENSAJEENVIADO" PRIMARY KEY (idmensaje_enviado)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mensajes_enviados
  OWNER TO postgres;
  
  CREATE TABLE public.tipo_usuarios
(
  idtipo_usuarios integer NOT NULL,
  idusuario integer,
  detalle character varying(50),
  CONSTRAINT "PKTIPOUSER" PRIMARY KEY (idtipo_usuarios)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.tipo_usuarios
  OWNER TO postgres;

CREATE TABLE public.usuarios
(
  idusuario integer NOT NULL,
  nombre character varying(20),
  correo character varying(10),
  tipo integer,
  "user" character varying(10),
  clave character varying(10),
  CONSTRAINT "PKUSUSARIOS" PRIMARY KEY (idusuario)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuarios
  OWNER TO postgres;

CREATE TABLE public.usuarios_bloqueados
(
  idusuario_bloqueado integer NOT NULL,
  fecha_bloqueo date,
  idusuario integer,
  CONSTRAINT "PKBLOQUEADOS" PRIMARY KEY (idusuario_bloqueado)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuarios_bloqueados
  OWNER TO postgres;