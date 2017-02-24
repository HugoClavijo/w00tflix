-- Database: w00tflix

-- DROP DATABASE w00tflix;

CREATE DATABASE w00tflix
  WITH OWNER = joxdnzutsohxym
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Spain.1252'
       LC_CTYPE = 'Spanish_Spain.1252'
       CONNECTION LIMIT = -1;

-- Table: public.categorias

-- DROP TABLE public.categorias;

CREATE TABLE public.categorias
(
  idcategorias integer NOT NULL DEFAULT nextval('categorias_idcategorias_seq'::regclass),
  nombre character varying(30),
  descripcion character varying(30),
  CONSTRAINT "PK" PRIMARY KEY (idcategorias),
  CONSTRAINT "Unico_categorias" UNIQUE (idcategorias)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.categorias
  OWNER TO joxdnzutsohxym;
  
-- Table: public.comentarios

-- DROP TABLE public.comentarios;

CREATE TABLE public.comentarios
(
  idcomentarios integer NOT NULL DEFAULT nextval('comentarios_idcomentarios_seq'::regclass),
  idusuario integer,
  idvideo integer,
  comentario character varying(30),
  CONSTRAINT "PK_Comentarios" PRIMARY KEY (idcomentarios),
  CONSTRAINT "FK_comentario_video" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_comentarios_usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "Unico_comentarios" UNIQUE (idcomentarios)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.comentarios
  OWNER TO joxdnzutsohxym;

-- Table: public.detalle_videos

-- DROP TABLE public.detalle_videos;

CREATE TABLE public.detalle_videos
(
  iddetalle integer NOT NULL DEFAULT nextval('detalle_videos_iddetalle_seq'::regclass),
  descripcion character varying(30),
  CONSTRAINT "PK_detalle" PRIMARY KEY (iddetalle),
  CONSTRAINT unique_detalle UNIQUE (iddetalle)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.detalle_videos
  OWNER TO joxdnzutsohxyms;

-- Table: public.historial

-- DROP TABLE public.historial;

CREATE TABLE public.historial
(
  idhistorial integer NOT NULL DEFAULT nextval('historial_idhistorial_seq'::regclass),
  idusuario integer,
  idvideo integer,
  fecha_entrada date,
  hora_entrada character varying(10),
  CONSTRAINT "PK_Historial" PRIMARY KEY (idhistorial),
  CONSTRAINT "FK_historial_usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_historial_video" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_historial UNIQUE (idhistorial)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.historial
  OWNER TO joxdnzutsohxym;

-- Table: public.lista_favoritos

-- DROP TABLE public.lista_favoritos;

CREATE TABLE public.lista_favoritos
(
  idlista_favoritos integer NOT NULL DEFAULT nextval('lista_favoritos_idlista_favoritos_seq'::regclass),
  idusuario integer,
  idvideo integer,
  CONSTRAINT "PK_ListaFavoritos" PRIMARY KEY (idlista_favoritos),
  CONSTRAINT "FK_listafavoritos_usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_listafavoritos_video" FOREIGN KEY (idvideo)
      REFERENCES public.video (idvideo) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_listafavoritos UNIQUE (idlista_favoritos)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.lista_favoritos
  OWNER TO joxdnzutsohxym;

-- Table: public.mensajes_enviados

-- DROP TABLE public.mensajes_enviados;

CREATE TABLE public.mensajes_enviados
(
  idmensajes_enviados integer NOT NULL DEFAULT nextval('mensajes_enviados_idmensajes_enviados_seq'::regclass),
  idusuario integer,
  mensaje character varying(30),
  CONSTRAINT "PK_MensajesEnviados" PRIMARY KEY (idmensajes_enviados),
  CONSTRAINT "FK_mensajesenviados_usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_mensajes_enviados UNIQUE (idmensajes_enviados)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mensaj
es_enviados
  OWNER TO joxdnzutsohxym;

-- Table: public.mensajes_recibidos

-- DROP TABLE public.mensajes_recibidos;

CREATE TABLE public.mensajes_recibidos
(
  idmensajes_recibidos integer NOT NULL DEFAULT nextval('mensajes_recibidos_idmensajes_recibidos_seq'::regclass),
  idusuario integer,
  mensaje character varying(30),
  CONSTRAINT "PK_MensajesRecibidos" PRIMARY KEY (idmensajes_recibidos),
  CONSTRAINT "FK_mensajesrecibidos_usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_mensajes_recibidos UNIQUE (idmensajes_recibidos)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.mensajes_recibidos
  OWNER TO joxdnzutsohxym;

-- Table: public.tipo_usuarios

-- DROP TABLE public.tipo_usuarios;

CREATE TABLE public.tipo_usuarios
(
  idtipousuario integer NOT NULL DEFAULT nextval('tipo_usuarios_idtipousuario_seq'::regclass),
  idusuario integer,
  detalle character varying(30),
  CONSTRAINT "PK_TipoUsuario" PRIMARY KEY (idtipousuario),
  CONSTRAINT "FK_tiposusuarios_usuarios" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_tipousuarios UNIQUE (idtipousuario)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.tipo_usuarios
  OWNER TO joxdnzutsohxym;

-- Table: public.usuario

-- DROP TABLE public.usuario;

CREATE TABLE public.usuario
(
  idusuario integer NOT NULL DEFAULT nextval('usuario_idusuario_seq'::regclass),
  nombre character varying(30),
  correo character varying(30),
  idtipousuario integer,
  "user" character varying(10),
  key character varying(10),
  CONSTRAINT "PK_Usuario" PRIMARY KEY (idusuario),
  CONSTRAINT unico_usuario UNIQUE (idusuario)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuario
  OWNER TO joxdnzutsohxym;

-- Table: public.usuarios_bloqueados

-- DROP TABLE public.usuarios_bloqueados;

CREATE TABLE public.usuarios_bloqueados
(
  idusuariobloqueado integer NOT NULL DEFAULT nextval('usuarios_bloqueados_idusuariobloqueado_seq'::regclass),
  idusuario integer,
  fecha_bloqueo date,
  CONSTRAINT "PK_UsuarioBloqueado" PRIMARY KEY (idusuariobloqueado),
  CONSTRAINT "FK_usuariosbloqueados_usuarios" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT unico_usuariobloqueados UNIQUE (idusuariobloqueado)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.usuarios_bloqueados
  OWNER TO joxdnzutsohxym;

-- Table: public.video

-- DROP TABLE public.video;

CREATE TABLE public.video
(
  idvideo integer NOT NULL DEFAULT nextval('video_idvideo_seq'::regclass),
  idusuario integer,
  iddetalles integer,
  idcategorias integer,
  idranking integer,
  descripcion character varying(30),
  CONSTRAINT "PK_Video" PRIMARY KEY (idvideo),
  CONSTRAINT "FK_Video_Usuario" FOREIGN KEY (idusuario)
      REFERENCES public.usuario (idusuario) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_video_categoria" FOREIGN KEY (idcategorias)
      REFERENCES public.categorias (idcategorias) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_video_detalle" FOREIGN KEY (iddetalles)
      REFERENCES public.detalle_videos (iddetalle) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "FK_video_ranking" FOREIGN KEY (idranking)
      REFERENCES public.video_ranking (idvideoranking) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION,
  CONSTRAINT "Unico_video" UNIQUE (idvideo)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.video
  OWNER TO joxdnzutsohxym;

-- Table: public.video_ranking

-- DROP TABLE public.video_ranking;

CREATE TABLE public.video_ranking
(
  idvideoranking integer NOT NULL DEFAULT nextval('video_ranking_idvideoranking_seq'::regclass),
  cant_estrellas integer,
  cant_reproducciones integer,
  puesto integer,
  CONSTRAINT "PK_VideoRanking" PRIMARY KEY (idvideoranking)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.video_ranking
  OWNER TO joxdnzutsohxym;


-- Sequence: public.categorias_idcategorias_seq

-- DROP SEQUENCE public.categorias_idcategorias_seq;

CREATE SEQUENCE public.categorias_idcategorias_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.categorias_idcategorias_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.comentarios_idcomentarios_seq

-- DROP SEQUENCE public.comentarios_idcomentarios_seq;

CREATE SEQUENCE public.comentarios_idcomentarios_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.comentarios_idcomentarios_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.detalle_videos_iddetalle_seq

-- DROP SEQUENCE public.detalle_videos_iddetalle_seq;

CREATE SEQUENCE public.detalle_videos_iddetalle_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.detalle_videos_iddetalle_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.historial_idhistorial_seq

-- DROP SEQUENCE public.historial_idhistorial_seq;

CREATE SEQUENCE public.historial_idhistorial_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.historial_idhistorial_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.lista_favoritos_idlista_favoritos_seq

-- DROP SEQUENCE public.lista_favoritos_idlista_favoritos_seq;

CREATE SEQUENCE public.lista_favoritos_idlista_favoritos_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807-- Sequence: public.mensajes_enviados_idmensajes_enviados_seq

-- DROP SEQUENCE public.mensajes_enviados_idmensajes_enviados_seq;

CREATE SEQUENCE public.mensajes_enviados_idmensajes_enviados_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.mensajes_enviados_idmensajes_enviados_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.mensajes_recibidos_idmensajes_recibidos_seq

-- DROP SEQUENCE public.mensajes_recibidos_idmensajes_recibidos_seq;

CREATE SEQUENCE public.mensajes_recibidos_idmensajes_recibidos_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.mensajes_recibidos_idmensajes_recibidos_seq
  OWNER TO joxdnzutsohxym;

  START 1
  CACHE 1;
ALTER TABLE public.lista_favoritos_idlista_favoritos_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.mensajes_enviados_idmensajes_enviados_seq

-- DROP SEQUENCE public.mensajes_enviados_idmensajes_enviados_seq;

CREATE SEQUENCE public.mensajes_enviados_idmensajes_enviados_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.mensajes_enviados_idmensajes_enviados_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.mensajes_recibidos_idmensajes_recibidos_seq

-- DROP SEQUENCE public.mensajes_recibidos_idmensajes_recibidos_seq;

CREATE SEQUENCE public.mensajes_recibidos_idmensajes_recibidos_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.mensajes_recibidos_idmensajes_recibidos_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.tipo_usuarios_idtipousuario_seq

-- DROP SEQUENCE public.tipo_usuarios_idtipousuario_seq;

CREATE SEQUENCE public.tipo_usuarios_idtipousuario_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.tipo_usuarios_idtipousuario_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.usuario_idusuario_seq

-- DROP SEQUENCE public.usuario_idusuario_seq;

CREATE SEQUENCE public.usuario_idusuario_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.usuario_idusuario_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.usuarios_bloqueados_idusuariobloqueado_seq

-- DROP SEQUENCE public.usuarios_bloqueados_idusuariobloqueado_seq;

CREATE SEQUENCE public.usuarios_bloqueados_idusuariobloqueado_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.usuarios_bloqueados_idusuariobloqueado_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.video_idvideo_seq

-- DROP SEQUENCE public.video_idvideo_seq;

CREATE SEQUENCE public.video_idvideo_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.video_idvideo_seq
  OWNER TO joxdnzutsohxym;

-- Sequence: public.video_ranking_idvideoranking_seq

-- DROP SEQUENCE public.video_ranking_idvideoranking_seq;

CREATE SEQUENCE public.video_ranking_idvideoranking_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE public.video_ranking_idvideoranking_seq
  OWNER TO joxdnzutsohxym;