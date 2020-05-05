/*==============================================================*/
/* DBMS name:      Microsoft SQL Server 2008                    */
/* Created on:     05/05/2020 19:56:59                          */
/*==============================================================*/


if exists (select 1
   from sys.sysreferences r join sys.sysobjects o on (o.id = r.constid and o.type = 'F')
   where r.fkeyid = object_id('Client') and o.name = 'FK_CLIENT_GENERALIZ_INDIVIDU')
alter table Client
   drop constraint FK_CLIENT_GENERALIZ_INDIVIDU
go

if exists (select 1
   from sys.sysreferences r join sys.sysobjects o on (o.id = r.constid and o.type = 'F')
   where r.fkeyid = object_id('Passager') and o.name = 'FK_PASSAGER_GENERALIZ_INDIVIDU')
alter table Passager
   drop constraint FK_PASSAGER_GENERALIZ_INDIVIDU
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('Client')
            and   name  = 'GENERALIZATION_3_FK'
            and   indid > 0
            and   indid < 255)
   drop index Client.GENERALIZATION_3_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('Client')
            and   type = 'U')
   drop table Client
go

if exists (select 1
            from  sysobjects
           where  id = object_id('Individu')
            and   type = 'U')
   drop table Individu
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('Passager')
            and   name  = 'GENERALIZATION_4_FK'
            and   indid > 0
            and   indid < 255)
   drop index Passager.GENERALIZATION_4_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('Passager')
            and   type = 'U')
   drop table Passager
go

if exists (select 1
            from  sysobjects
           where  id = object_id('Reservation')
            and   type = 'U')
   drop table Reservation
go

if exists (select 1
            from  sysobjects
           where  id = object_id('Vols')
            and   type = 'U')
   drop table Vols
go

/*==============================================================*/
/* Table: Client                                                */
/*==============================================================*/
create table Client (
   NumeroIndividu       int                  not null,
   CodeClient           int                  not null,
   constraint PK_CLIENT primary key nonclustered (NumeroIndividu, CodeClient)
)
go

/*==============================================================*/
/* Index: GENERALIZATION_3_FK                                   */
/*==============================================================*/
create index GENERALIZATION_3_FK on Client (
NumeroIndividu ASC
)
go

/*==============================================================*/
/* Table: Individu                                              */
/*==============================================================*/
create table Individu (
   NumeroIndividu       int                  not null,
   Nom                  varchar(254)         null,
   Prenom               varchar(254)         null,
   Address              varchar(254)         null,
   CodePostal           int                  null,
   Ville                varchar(254)         null,
   NumeroPassport       int                  null,
   constraint PK_INDIVIDU primary key nonclustered (NumeroIndividu)
)
go

/*==============================================================*/
/* Table: Passager                                              */
/*==============================================================*/
create table Passager (
   NumeroIndividu       int                  not null,
   CodePassager         int                  not null,
   NombreDesPoints      int                  null,
   constraint PK_PASSAGER primary key nonclustered (NumeroIndividu, CodePassager)
)
go

/*==============================================================*/
/* Index: GENERALIZATION_4_FK                                   */
/*==============================================================*/
create index GENERALIZATION_4_FK on Passager (
NumeroIndividu ASC
)
go

/*==============================================================*/
/* Table: Reservation                                           */
/*==============================================================*/
create table Reservation (
   NumeroReservation    int                  not null,
   DateReservation      datetime             null,
   constraint PK_RESERVATION primary key nonclustered (NumeroReservation)
)
go

/*==============================================================*/
/* Table: Vols                                                  */
/*==============================================================*/
create table Vols (
   NumeroVol            int                  not null,
   DateDepart           datetime             null,
   DateArrive           datetime             null,
   constraint PK_VOLS primary key nonclustered (NumeroVol)
)
go

alter table Client
   add constraint FK_CLIENT_GENERALIZ_INDIVIDU foreign key (NumeroIndividu)
      references Individu (NumeroIndividu)
go

alter table Passager
   add constraint FK_PASSAGER_GENERALIZ_INDIVIDU foreign key (NumeroIndividu)
      references Individu (NumeroIndividu)
go

