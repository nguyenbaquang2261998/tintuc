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

 Date: 14/08/2019 14:28:24
*/


// ----------------------------
// Collection structure for feed_categories
// ----------------------------
db.getCollection("feed_categories").drop();
db.createCollection("feed_categories");

// ----------------------------
// Documents of feed_categories
// ----------------------------
db.getCollection("feed_categories").insert([ {
    _id: ObjectId("5d47dcd6bb87f00fcca76030"),
    name: "",
    description: "",
    "parent_id": ObjectId("5d47dd0dbb87f00fcca76031"),
    order: "",
    status: ""
} ]);

// ----------------------------
// Collection structure for feeds
// ----------------------------
db.getCollection("feeds").drop();
db.createCollection("feeds");

// ----------------------------
// Documents of feeds
// ----------------------------
db.getCollection("feeds").insert([ {
    _id: ObjectId("5d537607f569c021ac23b079"),
    "user_id": ObjectId("5d5377edf569c021ac23b07d"),
    post: {
        content: "Toi nay an gi",
        image: [
            null
        ],
        answer: [
            {
                ans: "Dap an A",
                "user_id": [
                    ObjectId("5d5377edf569c021ac23b07d"),
                    ObjectId("5d5377edf569c021ac23b07d")
                ]
            },
            {
                ans: "Dap an B",
                "user_id": [
                    ObjectId("5d5377edf569c021ac23b07d"),
                    ObjectId("5d5377edf569c021ac23b07d")
                ]
            },
            {
                ans: "Dap an C",
                "user_id": [
                    ObjectId("5d5377edf569c021ac23b07d"),
                    ObjectId("5d5377edf569c021ac23b07d")
                ]
            }
        ],
        timelive: null
    },
    tag: null,
    like: [
        ObjectId("5d5377edf569c021ac23b07d"),
        ObjectId("5d5377edf569c021ac23b07d")
    ],
    "parent_id": ObjectId("5d5377def569c021ac23b07b"),
    type: "question",
    "created_at": null,
    status: "1"
} ]);

// ----------------------------
// Collection structure for follows
// ----------------------------
db.getCollection("follows").drop();
db.createCollection("follows");

// ----------------------------
// Documents of follows
// ----------------------------
db.getCollection("follows").insert([ {
    _id: ObjectId("5d47e279bb87f00fcca76032"),
    "user_id": "",
    "user_follow": "",
    "follow_time": "",
    "unfollow_time": "",
    status: ""
} ]);

// ----------------------------
// Collection structure for images
// ----------------------------
db.getCollection("images").drop();
db.createCollection("images");

// ----------------------------
// Documents of images
// ----------------------------
db.getCollection("images").insert([ {
    _id: ObjectId("5d47da54bb87f00fcca7602f"),
    name: "",
    "content_id": "",
    "content_type": "",
    ext: ""
} ]);

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

// ----------------------------
// Collection structure for user_profile
// ----------------------------
db.getCollection("user_profile").drop();
db.createCollection("user_profile");
