create table users(
 id_user bigint,
 nombre char(20) not null,
 apellido char(20), 
 telefono char(10) unique, 
 email varchar not null
);