--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.4
-- Dumped by pg_dump version 9.6.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: gallery; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE gallery (
    gallaryid character varying(80) NOT NULL,
    image integer
);


ALTER TABLE gallery OWNER TO qdfzgefmqmodke;

--
-- Name: image; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE image (
    title character varying(80),
    date date,
    image bytea,
    username character varying(80),
    imageid integer NOT NULL
);


ALTER TABLE image OWNER TO qdfzgefmqmodke;

--
-- Name: imagedata; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE imagedata (
    image bytea NOT NULL
);


ALTER TABLE imagedata OWNER TO qdfzgefmqmodke;

--
-- Name: imagedate; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE imagedate (
    date date NOT NULL
);


ALTER TABLE imagedate OWNER TO qdfzgefmqmodke;

--
-- Name: imagetitle; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE imagetitle (
    title character varying(80) NOT NULL
);


ALTER TABLE imagetitle OWNER TO qdfzgefmqmodke;

--
-- Name: users; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE users (
    name character varying(80) NOT NULL
);


ALTER TABLE users OWNER TO qdfzgefmqmodke;

--
-- Data for Name: gallery; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY gallery (gallaryid, image) FROM stdin;
\.


--
-- Data for Name: image; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY image (title, date, image, username, imageid) FROM stdin;
\.


--
-- Data for Name: imagedata; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagedata (image) FROM stdin;
\.


--
-- Data for Name: imagedate; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagedate (date) FROM stdin;
\.


--
-- Data for Name: imagetitle; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagetitle (title) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY users (name) FROM stdin;
\.


--
-- Name: gallery gallery_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY gallery
    ADD CONSTRAINT gallery_pkey PRIMARY KEY (gallaryid);


--
-- Name: image image_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image
    ADD CONSTRAINT image_pkey PRIMARY KEY (imageid);


--
-- Name: imagedata imagedata_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY imagedata
    ADD CONSTRAINT imagedata_pkey PRIMARY KEY (image);


--
-- Name: imagedate imagedate_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY imagedate
    ADD CONSTRAINT imagedate_pkey PRIMARY KEY (date);


--
-- Name: imagetitle imagetitle_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY imagetitle
    ADD CONSTRAINT imagetitle_pkey PRIMARY KEY (title);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (name);


--
-- Name: gallery gallery_image_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY gallery
    ADD CONSTRAINT gallery_image_fkey FOREIGN KEY (image) REFERENCES image(imageid);


--
-- Name: image image_date_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image
    ADD CONSTRAINT image_date_fkey FOREIGN KEY (date) REFERENCES imagedate(date);


--
-- Name: image image_image_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image
    ADD CONSTRAINT image_image_fkey FOREIGN KEY (image) REFERENCES imagedata(image);


--
-- Name: image image_title_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image
    ADD CONSTRAINT image_title_fkey FOREIGN KEY (title) REFERENCES imagetitle(title);


--
-- Name: image image_username_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image
    ADD CONSTRAINT image_username_fkey FOREIGN KEY (username) REFERENCES users(name);


--
-- Name: public; Type: ACL; Schema: -; Owner: qdfzgefmqmodke
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO qdfzgefmqmodke;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO qdfzgefmqmodke;


--
-- PostgreSQL database dump complete
--

