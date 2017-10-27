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
    gallaryid integer NOT NULL,
    image integer
);


ALTER TABLE gallery OWNER TO qdfzgefmqmodke;

--
-- Name: gallery_gallaryid_seq; Type: SEQUENCE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE SEQUENCE gallery_gallaryid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE gallery_gallaryid_seq OWNER TO qdfzgefmqmodke;

--
-- Name: gallery_gallaryid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qdfzgefmqmodke
--

ALTER SEQUENCE gallery_gallaryid_seq OWNED BY gallery.gallaryid;


--
-- Name: image; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE image (
    title character varying(80),
    date date,
    image character varying(120),
    username character varying(80),
    imageid integer NOT NULL
);


ALTER TABLE image OWNER TO qdfzgefmqmodke;

--
-- Name: image_imageid_seq; Type: SEQUENCE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE SEQUENCE image_imageid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE image_imageid_seq OWNER TO qdfzgefmqmodke;

--
-- Name: image_imageid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qdfzgefmqmodke
--

ALTER SEQUENCE image_imageid_seq OWNED BY image.imageid;


--
-- Name: imagedata; Type: TABLE; Schema: public; Owner: qdfzgefmqmodke
--

CREATE TABLE imagedata (
    image character varying(120) NOT NULL
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
-- Name: gallery gallaryid; Type: DEFAULT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY gallery ALTER COLUMN gallaryid SET DEFAULT nextval('gallery_gallaryid_seq'::regclass);


--
-- Name: image imageid; Type: DEFAULT; Schema: public; Owner: qdfzgefmqmodke
--

ALTER TABLE ONLY image ALTER COLUMN imageid SET DEFAULT nextval('image_imageid_seq'::regclass);


--
-- Data for Name: gallery; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY gallery (gallaryid, image) FROM stdin;
\.


--
-- Name: gallery_gallaryid_seq; Type: SEQUENCE SET; Schema: public; Owner: qdfzgefmqmodke
--

SELECT pg_catalog.setval('gallery_gallaryid_seq', 1, false);


--
-- Data for Name: image; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY image (title, date, image, username, imageid) FROM stdin;
Pepe	2017-10-13	https://ih1.redbubble.net/image.96188288.7434/flat,800x800,070,f.jpg	Marcus	1
Smug Pepe	2017-10-13	https://tribcw33.files.wordpress.com/2016/09/pepe-frog.jpg?quality=85&strip=all	Marcus	2
Apu Apustaja	2017-10-14	http://i0.kym-cdn.com/entries/icons/original/000/021/523/R14kkDj.png	Joe	3
Mighty Pepe	2017-10-19	http://i0.kym-cdn.com/photos/images/facebook/000/895/597/857.jpg	Fred	4
Green frog	2017-10-17	http://i.dailymail.co.uk/i/pix/2015/09/02/08/2BE5406100000578-3218820-image-m-25_1441179775589.jpg	Dillan 	5
1 jampi boi	2017-10-20	https://upload.wikimedia.org/wikipedia/commons/e/e2/Green_Tree_Frog_(Litoria_caerulea).jpg	River	6
I wear my sunglasses at night!	2017-10-22	https://media4.s-nbcnews.com/j/msnbc/components/video/201609/a_ov_pepe_160928.nbcnews-ux-1080-600.jpg	Walter	7
Green Side of the Pepe	2017-10-27	http://mydreamcompany333.weebly.com/uploads/5/4/9/5/54952315/s938110379110678739_p2_i2_w960.png	Roger Ebert	9
Spooky Pepe	2017-10-30	https://ih1.redbubble.net/image.106892793.4293/flat,800x800,075,f.u1.jpg	Rob	10
Teenage Mutant Ninja Pepe	2017-11-01	https://cdn.drawception.com/images/panels/2015/7-5/QwEws7PxMx-4.png	Ken	11
Pumpkin Pepe	2017-11-02	https://twibbon.blob.core.windows.net/twibbon/2015/278/e23d1eaf-377b-49c6-840b-799f718f82dc.png	Max	8
\.


--
-- Name: image_imageid_seq; Type: SEQUENCE SET; Schema: public; Owner: qdfzgefmqmodke
--

SELECT pg_catalog.setval('image_imageid_seq', 11, true);


--
-- Data for Name: imagedata; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagedata (image) FROM stdin;
https://ih1.redbubble.net/image.96188288.7434/flat,800x800,070,f.jpg
https://tribcw33.files.wordpress.com/2016/09/pepe-frog.jpg?quality=85&strip=all
http://i0.kym-cdn.com/entries/icons/original/000/021/523/R14kkDj.png
http://i0.kym-cdn.com/photos/images/facebook/000/895/597/857.jpg
http://i.dailymail.co.uk/i/pix/2015/09/02/08/2BE5406100000578-3218820-image-m-25_1441179775589.jpg
https://upload.wikimedia.org/wikipedia/commons/e/e2/Green_Tree_Frog_(Litoria_caerulea).jpg
https://media4.s-nbcnews.com/j/msnbc/components/video/201609/a_ov_pepe_160928.nbcnews-ux-1080-600.jpg
https://twibbon.blob.core.windows.net/twibbon/2015/278/e23d1eaf-377b-49c6-840b-799f718f82dc.png
http://mydreamcompany333.weebly.com/uploads/5/4/9/5/54952315/s938110379110678739_p2_i2_w960.png
https://ih1.redbubble.net/image.106892793.4293/flat,800x800,075,f.u1.jpg
https://cdn.drawception.com/images/panels/2015/7-5/QwEws7PxMx-4.png
\.


--
-- Data for Name: imagedate; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagedate (date) FROM stdin;
2017-10-13
2017-10-14
2017-10-19
2017-10-17
2017-10-20
2017-10-21
2017-10-22
2017-10-31
2017-10-27
2017-10-30
2017-10-25
2017-10-24
2017-11-01
2017-11-02
\.


--
-- Data for Name: imagetitle; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY imagetitle (title) FROM stdin;
Pepe
Smug Pepe
Apu Apustaja
Mighty Pepe
green frog
Green frog
1 jampi boi
I wear my sunglasses at night!
Pumpkin Pepe
Green Side of the Pepe
Spooky Pepe
Teenage Mutant Ninja Frogs
Teenage Mutant Ninja Pepe
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: qdfzgefmqmodke
--

COPY users (name) FROM stdin;
Marcus
Joe
Fred
Dillan
Dillan Jr
Dillan 
River
Walter
Max
Roger Ebert
Rob
Drew Barrymore
Bob
Ken
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

