
CREATE TABLE Program1(
    Episodes INTEGER DEFAULT 0 PRIMARY KEY,
    estimateBudget INTEGER
);

CREATE TABLE Program2(
    Title Char (50) PRIMARY KEY ,
    Episodes INTEGER,
    dayPlayed Char(50),
    FOREIGN KEY (Episodes) REFERENCES Program1(Episodes)
        ON DELETE SET NULL
);



CREATE TABLE Contain_Episode
(
    Title Char(50),
    ProgramTitle Char(50) NOT NULL ,
    ReleasedDate DATE,
    StreamingTime INTEGER,
    PRIMARY KEY (Title, ProgramTitle),
    FOREIGN KEY (ProgramTitle) REFERENCES Program2(Title)
        ON DELETE CASCADE
);

INSERT INTO Program1 VALUES (0,0);

INSERT INTO Program1 VALUES (1, 1000);

INSERT INTO Program1 VALUES (2, 2000);

INSERT INTO Program1 VALUES (3,3000);

INSERT INTO Program1 VALUES (4, 4000);

INSERT INTO Program1 VALUES (5, 5000);

INSERT INTO Program1 VALUES (6, 6000);

INSERT INTO Program1 VALUES (7, 7000);

INSERT INTO Program1 VALUES (8, 8000);

INSERT INTO Program1 VALUES (9, 9000);

INSERT INTO Program1 VALUES (10,10000);

INSERT INTO Program1 VALUES (11, 11000);

INSERT INTO Program1 VALUES (12, 12000);

INSERT INTO Program1 VALUES (13, 13000);

INSERT INTO Program1 VALUES(14, 14000);

INSERT INTO Program1 VALUES (15, 15000);

INSERT INTO Program1 VALUES (16, 16000);

INSERT INTO Program1 VALUES (17, 17000);

INSERT INTO Program1 VALUES (18, 18000);

INSERT INTO Program1 VALUES (19, 19000);

INSERT INTO Program1 VALUES (20, 20000);

INSERT INTO Program2 VALUES ('A', 7, 'Thursday');

INSERT INTO Program2 VALUES ('B', 3, 'Friday');

INSERT INTO Program2 VALUES ('C', 2, 'Monday');

INSERT INTO Program2 VALUES ('D', 5, 'Friday');

INSERT INTO Program2 VALUES ('E', 7, 'Sunday');

INSERT INTO Program2 VALUES ('F', 2, 'Sunday');

INSERT INTO Program2 VALUES ('G', 3, 'Friday');

INSERT INTO Contain_Episode VALUES ('a1', 'A', '30-SEP-21', 120);

INSERT INTO Contain_Episode VALUES ('a2', 'A', '07-OCT-21', 110);

INSERT INTO Contain_Episode VALUES ('a3', 'A', '14-OCT-21', 115);

INSERT INTO Contain_Episode VALUES ('a4', 'A', '21-OCT-21', 118);

INSERT INTO Contain_Episode VALUES ('a5', 'A', '28-OCT-21', 122);

INSERT INTO Contain_Episode VALUES ('a6', 'A', '04-NOV-21', 125);

INSERT INTO Contain_Episode VALUES ('a7', 'A', '11-NOV-21', 125);

INSERT INTO Contain_Episode VALUES ('all', 'A', '11-NOV-21', 120);

INSERT INTO Contain_Episode VALUES ('b1', 'B', '05-NOV-21', 50);

INSERT INTO Contain_Episode VALUES ('b2', 'B', '12-NOV-21', 55);

INSERT INTO Contain_Episode VALUES ('b3', 'B', '19-NOV-21', 48);

INSERT INTO Contain_Episode VALUES ('all', 'B', '11-NOV-21', 60);

INSERT INTO Contain_Episode VALUES ('c1', 'C', '08-NOV-21', 90);

INSERT INTO Contain_Episode VALUES ('c2', 'C', '15-NOV-21', 95);

INSERT INTO Contain_Episode VALUES ('all', 'C', '11-NOV-21', 98);

INSERT INTO Contain_Episode VALUES ('d1', 'D', '22-NOV-21', 110);

INSERT INTO Contain_Episode VALUES ('d2', 'D', '29-NOV-21', 105);

INSERT INTO Contain_Episode VALUES ('d3', 'D', '05-NOV-21', 112);

INSERT INTO Contain_Episode VALUES ('d4', 'D', '12-NOV-21', 115);

INSERT INTO Contain_Episode VALUES ('d5', 'D', '19-NOV-21', 106);

INSERT INTO Contain_Episode VALUES ('all', 'D', '11-NOV-21', 110);

INSERT INTO Contain_Episode VALUES ('e1', 'E', '26-SEP-21', 40);

INSERT INTO Contain_Episode VALUES ('e2', 'E', '03-OCT-21', 45);

INSERT INTO Contain_Episode VALUES ('e3', 'E', '10-OCT-21', 46);

INSERT INTO Contain_Episode VALUES ('e4', 'E', '17-OCT-21', 43);

INSERT INTO Contain_Episode VALUES ('e5', 'E', '24-OCT-21', 44);

INSERT INTO Contain_Episode VALUES ('e6', 'E', '31-OCT-21', 45);

INSERT INTO Contain_Episode VALUES ('e7', 'E', '07-NOV-21', 40);

INSERT INTO Contain_Episode VALUES ('all', 'E', '11-NOV-21', 40);

INSERT INTO Contain_Episode VALUES ('f1', 'F', '31-OCT-21', 60);

INSERT INTO Contain_Episode VALUES ('f2', 'F', '07-NOV-21', 65);

INSERT INTO Contain_Episode VALUES ('all', 'F', '11-NOV-21', 65);

INSERT INTO Contain_Episode VALUES ('g1', 'G', '05-NOV-21', 100);

INSERT INTO Contain_Episode VALUES ('g2', 'G', '12-NOV-21', 105);

INSERT INTO Contain_Episode VALUES ('g3', 'G', '19-NOV-21', 100);

INSERT INTO Contain_Episode VALUES ('all', 'G', '11-NOV-21', 100);


