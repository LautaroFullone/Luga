create table users(
	id int auto_increment not null,
    role varchar(255),
    name varchar(255),
    email varchar(255),
    password varchar(255),
    created_at datetime,
    updated_at datetime,
    remember_token varchar(255),
    constraint pk_user primary key (id)
)engine=InnoDB;

create table categories(
	id int auto_increment not null,
    title varchar(255),
	description varchar(255),
    created_at datetime,
    updated_at datetime,
    constraint pk_categories primary key (id)
)engine=InnoDB;

create table products(
	id int auto_increment not null,
    title varchar(255),
    description varchar(255),
    price float,
    id_category int,
    created_at datetime,
    updated_at datetime,
    constraint pk_product primary key (id),
    constraint fk_product_category foreign key (id_category) references categories(id)
)engine=InnoDB;

create table imagesProduct(
	id int auto_increment not null,
    product_id int,
    image_path varchar(255),
    created_at datetime,
    updated_at datetime,
    constraint pk_images primary key (id)
)engine=InnoDB;

#-----------------------------------------------------------------------------------------------------------------------------------------

create table datosContacto(
	id int auto_increment not null,
    id_user int,
    contacto varchar(255),
    telefono varchar(255),
    celular varchar(255),
	created_at datetime,
    updated_at datetime,
    constraint pk_fiscal primary key (id),
    constraint fk_contacto_user foreign key (id_user) references users(id)
)engine=InnoDB;

create table datosFiscales(
	id int auto_increment not null,
    id_user int,
    razon_social varchar(255),
    cuit varchar(255),
    condicion varchar(255),
    domicilio_fiscal varchar(255),
    codigo_postal varchar(255),
    piso int,
    departamento varchar(255),
    localidad varchar(255),
    provincia varchar(255),
	created_at datetime,
    updated_at datetime,
    constraint pk_fiscal primary key (id),
    constraint fk_fiscal_user foreign key (id_user) references users(id)
)engine=InnoDB;

create table datosComerciales(
	id int auto_increment not null,
    id_user int,
    nombre_comercial varchar(255),
    domicilio_comercial varchar(255),
    codigo_postal varchar(255),
    piso int,
    departamento varchar(255),
    localidad varchar(255),
	provincia varchar(255),
    telefono varchar(255),
    fax varchar(255),
    email varchar(255),
    expreso_envio varchar(255),
	created_at datetime,
    updated_at datetime,
    constraint pk_fiscal primary key (id),
    constraint fk_comercial_user foreign key (id_user) references users(id)
)engine=InnoDB;


