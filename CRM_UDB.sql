/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     09/03/2013 0:00:31                           */
/*==============================================================*/



drop table if exists ALL_VALUES;

drop table if exists CAREERS;

drop table if exists CUSTOMERS;

drop table if exists FACULTIES;

drop table if exists IEM_CAREERS;

drop table if exists IEM_INSTITUTES;

drop table if exists IEM_SURVEY;

drop table if exists INSTITUTIONS;

drop table if exists INTERACTIONS;

drop table if exists OFFERED_CAREERS;

drop table if exists OPEN_HOUSE_SURVEY;

drop table if exists PACKAGE_SALES;

drop table if exists REGISTRATION;

drop table if exists USERS;

drop table if exists USER_TYPES;

drop table if exists VALUE_SETS;

/*==============================================================*/
/* Table: ALL_VALUES                                            */
/*==============================================================*/
create table ALL_VALUES
(
   VALUE_ID             int not null,
   VALUE_SET_ID         int,
   VALUE_DESCRIPTION    varchar(200),
   primary key (VALUE_ID)
);

/*==============================================================*/
/* Table: CAREERS                                               */
/*==============================================================*/
create table CAREERS
(
   ID_CAREER            int not null,
   INSTITUTION_ID       int,
   ID_FACULTY           int,
   CAREER_TITLE         int,
   CAREER_NAME          varchar(150) not null,
   primary key (ID_CAREER)
);

/*==============================================================*/
/* Table: CUSTOMERS                                             */
/*==============================================================*/
create table CUSTOMERS
(
   CUSTOMER_ID          int not null,
   INSTITUTION_ID       int,
   OPEN_HOUSE_SURVEY_ID int,
   IEM_SURVEY_ID        int,
   SURVEY_PACKAGE_SALE_ID int,
   REGISTRATION_ID      int,
   NAMES                varchar(100),
   SURNAME              varchar(100),
   CUSTOMER_EMAIL       varchar(150),
   SURVEY_STATUS        varchar(1),
   OPEN_HOUSE_STATUS    varchar(1),
   PACKAGE_STATUS       varchar(1),
   ENROLLMENT_STATUS    varchar(1),
   CUSTOMER_ADDRESS_LINE1 varchar(200),
   CUSTOMER_CITY        varchar(150),
   CUSTOMER_STATE       varchar(150),
   PARENT_NAME          varchar(150),
   PARENT_EMAIL         varchar(150),
   PARENT_PHONE         varchar(10),
   primary key (CUSTOMER_ID)
);

/*==============================================================*/
/* Table: FACULTIES                                             */
/*==============================================================*/
create table FACULTIES
(
   ID_FACULTY           int not null,
   FACULTY_NAME         varchar(150) not null,
   primary key (ID_FACULTY)
);

/*==============================================================*/
/* Table: IEM_CAREERS                                           */
/*==============================================================*/
create table IEM_CAREERS
(
   IEM_CAREER           int not null,
   IEM_SURVEY_ID        int,
   ID_CAREER            int not null,
   IEM_OPTION           int,
   primary key (IEM_CAREER)
);

/*==============================================================*/
/* Table: IEM_INSTITUTES                                        */
/*==============================================================*/
create table IEM_INSTITUTES
(
   IEM_INSTITUTES_ID    int not null,
   INSTITUTION_ID       int,
   IEM_SURVEY_ID        int not null,
   OPCION               int,
   primary key (IEM_INSTITUTES_ID)
);

/*==============================================================*/
/* Table: IEM_SURVEY                                            */
/*==============================================================*/
create table IEM_SURVEY
(
   IEM_SURVEY_ID        int not null,
   CUSTOMER_ID          int,
   IEM_DATE             date,
   IEM_HIGH_SCHOOL_OPTION int,
   IEM_CD               varchar(1),
   IEM_TEC              varchar(1),
   IEM_CL               varchar(1),
   IEM_FC               varchar(1),
   IEM_ACR              varchar(1),
   IEM_LAB              varchar(1),
   IEM_NADA             varchar(1),
   IEM_OTHERS            varchar(1),
   IEM_VISITS_INSTITUTIONS varchar(1),
   IEM_OTHERS2          varchar(1),
   IEM_EXEL             varchar(1),
   IEM_MB               varchar(1),
   IEM_BUENA            varchar(1),
   IEM_MALA             varchar(1),
   IEM_ID_CARD          varchar(8),
   primary key (IEM_SURVEY_ID)
);

/*==============================================================*/
/* Table: INSTITUTIONS                                          */
/*==============================================================*/
create table INSTITUTIONS
(
   INSTITUTION_ID       int not null,
   INSTITUTION_NAME     varchar(150) not null,
   ACRONYM              varchar(30),
   INSTITUTION_TYPE     varchar(100) not null,
   CUSTOMER_ADDRESS_LINE1 varchar(200),
   CUSTOMER_CITY        varchar(150),
   CUSTOMER_STATE       varchar(150),
   primary key (INSTITUTION_ID)
);

/*==============================================================*/
/* Table: INTERACTIONS                                          */
/*==============================================================*/
create table INTERACTIONS
(
   INTERACTION_ID       int not null,
   IEM_SURVEY_ID        int,
   OPEN_HOUSE_SURVEY_ID int,
   REGISTRATION_ID      int,
   USER_ID              int,
   SURVEY_PACKAGE_SALE_ID int,
   CUSTOMER_ID          int,
   INTERACTION_DATE     date,
   INTERACTION_CODE     int,
   COMENTARIES          varchar(256),
   primary key (INTERACTION_ID)
);

/*==============================================================*/
/* Table: OFFERED_CAREERS                                        */
/*==============================================================*/
create table OFFERED_CAREERS
(
   ID_CAREER            int,
   INSTITUTION_ID       int,
   OFFERED_CAREERS_ID    int,
   COMENTARIES          varchar(256)
);

/*==============================================================*/
/* Table: OPEN_HOUSE_SURVEY                                     */
/*==============================================================*/
create table OPEN_HOUSE_SURVEY
(
   OPEN_HOUSE_SURVEY_ID int not null,
   CUSTOMER_ID          int not null,
   ID_CAREER            int,
   OH_RADIO             varchar(1),
   OH_PRESS             varchar(1),
   OH_TV                varchar(1),
   OH_BILLBOARD         varchar(1),
   INSTITUTIONS_VISITS  varchar(1),
   primary key (OPEN_HOUSE_SURVEY_ID)
);

/*==============================================================*/
/* Table: PACKAGE_SALES                                         */
/*==============================================================*/
create table PACKAGE_SALES
(
   SURVEY_PACKAGE_SALE_ID int not null,
   ID_CAREER            int,
   CUSTOMER_ID          int not null,
   SALE_DATE            date,
   primary key (SURVEY_PACKAGE_SALE_ID)
);

/*==============================================================*/
/* Table: REGISTRATION                                          */
/*==============================================================*/
create table REGISTRATION
(
   REGISTRATION_ID      int not null,
   ID_CAREER            int not null,
   CUSTOMER_ID          int not null,
   REGISTRATION_DATE    date,
   primary key (REGISTRATION_ID)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   USER_ID              int not null,
   USER_TYPE_ID         int,
   USER_NAME            varchar(100) not null,
   primary key (USER_ID)
);

/*==============================================================*/
/* Table: USER_TYPES                                            */
/*==============================================================*/
create table USER_TYPES
(
   USER_TYPE_ID         int not null,
   TYPE_DESCRIPTION     varchar(30) not null,
   primary key (USER_TYPE_ID)
);

/*==============================================================*/
/* Table: VALUE_SETS                                            */
/*==============================================================*/
create table VALUE_SETS
(
   VALUE_SET_ID         int not null,
   VALUE_SET_CODE       varchar(30) not null,
   VALUE_SET_DESCRIPTION varchar(200),
   primary key (VALUE_SET_ID)
);

alter table ALL_VALUES add constraint FK_IS_CONFORMED foreign key (VALUE_SET_ID)
      references VALUE_SETS (VALUE_SET_ID) on delete restrict on update restrict;

alter table CAREERS add constraint FK_HAVE foreign key (ID_FACULTY)
      references FACULTIES (ID_FACULTY) on delete restrict on update restrict;

alter table CAREERS add constraint FK_OFFERED_CAREERS foreign key (INSTITUTION_ID)
      references INSTITUTIONS (INSTITUTION_ID) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_ASSIST foreign key (OPEN_HOUSE_SURVEY_ID)
      references OPEN_HOUSE_SURVEY (OPEN_HOUSE_SURVEY_ID) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_BUYS foreign key (SURVEY_PACKAGE_SALE_ID)
      references PACKAGE_SALES (SURVEY_PACKAGE_SALE_ID) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_FILLS foreign key (IEM_SURVEY_ID)
      references IEM_SURVEY (IEM_SURVEY_ID) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_REGISTER foreign key (REGISTRATION_ID)
      references REGISTRATION (REGISTRATION_ID) on delete restrict on update restrict;

alter table CUSTOMERS add constraint FK_STUDIED foreign key (INSTITUTION_ID)
      references INSTITUTIONS (INSTITUTION_ID) on delete restrict on update restrict;

alter table IEM_CAREERS add constraint FK_RELATIONSHIP_24 foreign key (IEM_SURVEY_ID)
      references IEM_SURVEY (IEM_SURVEY_ID) on delete restrict on update restrict;

alter table IEM_CAREERS add constraint FK_RELATIONSHIP_25 foreign key (ID_CAREER)
      references CAREERS (ID_CAREER) on delete restrict on update restrict;

alter table IEM_INSTITUTES add constraint FK_RELATIONSHIP_22 foreign key (IEM_SURVEY_ID)
      references IEM_SURVEY (IEM_SURVEY_ID) on delete restrict on update restrict;

alter table IEM_INSTITUTES add constraint FK_RELATIONSHIP_23 foreign key (INSTITUTION_ID)
      references INSTITUTIONS (INSTITUTION_ID) on delete restrict on update restrict;

alter table IEM_SURVEY add constraint FK_FILLS2 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_APPEARS foreign key (USER_ID)
      references USERS (USER_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_INTERACTION1 foreign key (REGISTRATION_ID)
      references REGISTRATION (REGISTRATION_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_INTERACTION2 foreign key (SURVEY_PACKAGE_SALE_ID)
      references PACKAGE_SALES (SURVEY_PACKAGE_SALE_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_INTERACTION3 foreign key (OPEN_HOUSE_SURVEY_ID)
      references OPEN_HOUSE_SURVEY (OPEN_HOUSE_SURVEY_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_INTERACTION4 foreign key (IEM_SURVEY_ID)
      references IEM_SURVEY (IEM_SURVEY_ID) on delete restrict on update restrict;

alter table INTERACTIONS add constraint FK_INTERACT_WITH foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table OFFERED_CAREERS add constraint FK_IS_OFFERED foreign key (ID_CAREER)
      references CAREERS (ID_CAREER) on delete restrict on update restrict;

alter table OFFERED_CAREERS add constraint FK_OFFERED_BY foreign key (INSTITUTION_ID)
      references INSTITUTIONS (INSTITUTION_ID) on delete restrict on update restrict;

alter table OPEN_HOUSE_SURVEY add constraint FK_ASSIST2 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table OPEN_HOUSE_SURVEY add constraint FK_EXPRESSED_INTEREST foreign key (ID_CAREER)
      references CAREERS (ID_CAREER) on delete restrict on update restrict;

alter table PACKAGE_SALES add constraint FK_BUYS2 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table PACKAGE_SALES add constraint FK_INTEREST foreign key (ID_CAREER)
      references CAREERS (ID_CAREER) on delete restrict on update restrict;

alter table REGISTRATION add constraint FK_REGISTER2 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table REGISTRATION add constraint FK_REGISTERED foreign key (ID_CAREER)
      references CAREERS (ID_CAREER) on delete restrict on update restrict;

alter table USERS add constraint FK_HAS foreign key (USER_TYPE_ID)
      references USER_TYPES (USER_TYPE_ID) on delete restrict on update restrict;

