CREATE DATABASE w00tflix
  WITH OWNER = postgres
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Spain.1252'
       LC_CTYPE = 'Spanish_Spain.1252'
       CONNECTION LIMIT = -1;
	   
CREATE TABLE public.categorias
(
  idcategorias integer NOT NULL,
  nombre character varying(20),
  descipcion character varying(30),
  CONSTRAINT "PK" PRIMARY KEY (idcategorias)
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
  CONSTRAINT "PKCOMENTARIOS" PRIMARY KEY (idcomentarios),
  CONSTRAINT "FK6" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK7" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO3" UNIQUE (idcomentarios)
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
  CONSTRAINT "PKHISTORIAL" PRIMARY KEY (idhistorial),
  CONSTRAINT "FK8" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK9" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO4" UNIQUE (idhistorial)
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
  CONSTRAINT "PKFAVORITOS" PRIMARY KEY (idlista_favoritos),
  CONSTRAINT "FK10" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK11" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO5" UNIQUE (idlista_favoritos)
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
  CONSTRAINT "PKMENSAJEENVIADO" PRIMARY KEY (idmensaje_enviado),
  CONSTRAINT "FK13" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO7" UNIQUE (idmensaje_enviado)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mensajes_enviados
  OWNER TO postgres;


CREATE TABLE public.mensajes_recibidos
(
  idmensajes_recibidos integer NOT NULL,
  idusuario integer,
  mensaje character varying(140),
  CONSTRAINT "PKMENSAJERECIBIDO" PRIMARY KEY (idmensajes_recibidos),
  CONSTRAINT "FK14" FOREIGN KEY (idusuario)
      REFERENCES public.mensajes_recibidos (idmensajes_recibidos) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO8" UNIQUE (idmensajes_recibidos)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mensajes_recibidos
  OWNER TO postgres;


CREATE TABLE public.tipo_usuarios
(
  idtipo_usuarios integer NOT NULL,
  detalle character varying(50),
  CONSTRAINT "PKTIPOUSER" PRIMARY KEY (idtipo_usuarios)
	 CONSTRAINT "FKTPIUSUARIO" FOREIGN KEY (idtipousuarios)
      REFERENCES public.usuarios (idtipousuarios) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
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
  idtipousuarios integer,
  CONSTRAINT "PKUSUSARIOS" PRIMARY KEY (idusuario),
  CONSTRAINT "FK5" FOREIGN KEY (tipo)
    REFERENCES public.tipo_usuarios (idtipo_usuarios) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO2" UNIQUE (idusuario)
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
  CONSTRAINT "PKBLOQUEADOS" PRIMARY KEY (idusuario_bloqueado),
  CONSTRAINT "FK12" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO6" UNIQUE (idusuario_bloqueado)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuarios_bloqueados
  OWNER TO postgres;


CREATE TABLE public.video
(
  idvideo integer NOT NULL,
  idusuario integer,
  iddetalle integer,
  idcategoria integer,
  idranking integer,
  descripcion character varying(30),
  CONSTRAINT "PKVIDEO" PRIMARY KEY (idvideo),
  CONSTRAINT "FK1" FOREIGN KEY (idusuario)
      REFERENCES public.usuarios (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK2" FOREIGN KEY (iddetalle)
      REFERENCES public.detalle_videos (iddetalles) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK3" FOREIGN KEY (idcategoria)
      REFERENCES public.categorias (idcategorias) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK4" FOREIGN KEY (idranking)
      REFERENCES public.video_ranking (idvideo_ranking) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "UNICO" UNIQUE (idvideo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.video
  OWNER TO postgres;


CREATE TABLE public.video_ranking
(
  idvideo_ranking integer NOT NULL,
  estrellas integer,
  cant_reproducciones integer,
  puesto integer,
  CONSTRAINT "PKRANKING" PRIMARY KEY (idvideo_ranking)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.video_ranking
  OWNER TO postgres;

