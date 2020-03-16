/*
 Navicat Premium Data Transfer

 Source Server         : techway
 Source Server Type    : MongoDB
 Source Server Version : 40010
 Source Host           : localhost:27017
 Source Schema         : social_db

 Target Server Type    : MongoDB
 Target Server Version : 40010
 File Encoding         : 65001

 Date: 16/08/2019 13:39:32
*/


// ----------------------------
// Collection structure for user
// ----------------------------
db.getCollection("user").drop();
db.createCollection("user");

// ----------------------------
// Documents of user
// ----------------------------
db.getCollection("user").insert([ {
    _id: ObjectId("5d4a5a142cb8db2708001926"),
    username: "letaitu",
    email: "Letaitu97@gmail.com",
    "password_hash": "$2y$13$6lzBl6fqYowJnQFdiOc1xOOob/MxyUE/ix1xsOH8abYsIB/uQ/r26",
    "auth_key": "LUHMfbvb54IoRfNrWh8uv7YbzBuzFJpR",
    "verification_token": "RTIXuemFAZWF_leX8pqkZnUCYHQYgb53_1565153812",
    status: NumberInt("10"),
    "created_at": NumberInt("1565153812"),
    "updated_at": NumberInt("1565153812")
} ]);
db.getCollection("user").insert([ {
    _id: ObjectId("5d4aa4bf2cb8db270800192b"),
    username: "admin",
    email: "letaitu1997@gmail.com",
    "password_hash": "$2y$13$mbf3noS8R1bwzxp6acVpKuuWfwVg0bPpCS/6hcst1BdDDbrHq07gG",
    "auth_key": "bho3eCuYYr30xlyKEQcllaIV8zlLWl2q",
    "verification_token": "zumDksMPfImynYcz-X09iCSYIn3ARGB9_1565172927",
    status: NumberInt("10"),
    "created_at": NumberInt("1565172927"),
    "updated_at": NumberInt("1565172927")
} ]);
