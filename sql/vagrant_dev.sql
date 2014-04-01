--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: newsitems; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE newsitems (
    id integer NOT NULL,
    title character(100) NOT NULL,
    description text
);


ALTER TABLE public.newsitems OWNER TO postgres;

--
-- Data for Name: newsitems; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO newsitems VALUES (1, 'Fermentum Fringilla Ullamcorper                                                                     ', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.');
INSERT INTO newsitems VALUES (2, 'Lorem Bibendum                                                                                      ', 'Malesuada Nibh Quam Bibendum');


--
-- Name: newsitemsUnique; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY newsitems
    ADD CONSTRAINT "newsitemsUnique" UNIQUE (id);


--
-- Name: unique_id; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY newsitems
    ADD CONSTRAINT unique_id PRIMARY KEY (id);


--
-- Name: index_id; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX index_id ON newsitems USING btree (id);


--
-- PostgreSQL database dump complete
--

