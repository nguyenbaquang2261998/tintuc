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

 Date: 06/09/2019 15:41:18
*/


// ----------------------------
// Collection structure for user_profile
// ----------------------------
db.getCollection("user_profile").drop();
db.createCollection("user_profile");

// ----------------------------
// Documents of user_profile
// ----------------------------
db.getCollection("user_profile").insert([ {
    _id: ObjectId("5d65ef79b7f39507c8006b32"),
    "user_id": ObjectId("5d6388da2cb8db2f180004d7"),
    "first_name": "Lê Tài",
    "last_name": "Tú",
    iden: "letaitu",
    phone: "0342127744",
    gender: "1",
    "birth_date": NumberInt("865432154"),
    story: "7 7 49",
    images: {
        avatar: "user-1.jpg",
        background: "12.jpg"
    },
    "created_at": "null",
    "updated_at": "null"
} ]);
db.getCollection("user_profile").insert([ {
    _id: ObjectId("5d6f2a692cb8db16ec000120"),
    "first_name": "Lê Tài",
    "last_name": "Tú",
    phone: "0342127744",
    gender: "1",
    story: "9981",
    "created_at": NumberInt("1567566441"),
    "user_id": ObjectId("5d4aa4bf2cb8db270800192b"),
    iden: "admin.tu",
    "birth_date": NumberInt("882572400")
} ]);
