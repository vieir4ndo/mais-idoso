CREATE TABLE lembrete (
  id_lembrete INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_lembrete));



CREATE TABLE medicamento (
  id_medicamento INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_medicamento));



CREATE TABLE restricaoalimentar (
  id_restricaoalimentar INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_restricaoalimentar));



CREATE TABLE doenca (
  id_doenca INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_doenca));



CREATE TABLE atividadefisica (
  id_atividadefisica INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_atividadefisica));



CREATE TABLE cartilha (
  id_cartilha INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_cartilha));



CREATE TABLE consulta (
  id_consulta INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT  ,
PRIMARY KEY(id_consulta));



CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  medicamento_id_medicamento INTEGER UNSIGNED  NOT NULL  ,
  restricaoalimentar_id_restricaoalimentar INTEGER UNSIGNED  NOT NULL  ,
  lembrete_id_lembrete INTEGER UNSIGNED  NOT NULL  ,
  doenca_id_doenca INTEGER UNSIGNED  NOT NULL  ,
  consulta_id_consulta INTEGER UNSIGNED  NOT NULL  ,
  atividadefisica_id_atividadefisica INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(id_usuario)  ,
INDEX usuario_FKIndex1(atividadefisica_id_atividadefisica)  ,
INDEX usuario_FKIndex2(consulta_id_consulta)  ,
INDEX usuario_FKIndex3(doenca_id_doenca)  ,
INDEX usuario_FKIndex4(lembrete_id_lembrete)  ,
INDEX usuario_FKIndex5(restricaoalimentar_id_restricaoalimentar)  ,
INDEX usuario_FKIndex6(medicamento_id_medicamento),
  FOREIGN KEY(atividadefisica_id_atividadefisica)
    REFERENCES atividadefisica(id_atividadefisica)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(consulta_id_consulta)
    REFERENCES consulta(id_consulta)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(doenca_id_doenca)
    REFERENCES doenca(id_doenca)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(lembrete_id_lembrete)
    REFERENCES lembrete(id_lembrete)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(restricaoalimentar_id_restricaoalimentar)
    REFERENCES restricaoalimentar(id_restricaoalimentar)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(medicamento_id_medicamento)
    REFERENCES medicamento(id_medicamento)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);