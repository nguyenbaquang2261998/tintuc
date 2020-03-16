/*
 Navicat Premium Data Transfer

 Source Server         : social_db
 Source Server Type    : MongoDB
 Source Server Version : 40010
 Source Host           : localhost:27017
 Source Schema         : social_db

 Target Server Type    : MongoDB
 Target Server Version : 40010
 File Encoding         : 65001

 Date: 20/08/2019 16:05:28
*/


// ----------------------------
// Collection structure for admin
// ----------------------------
db.getCollection("admin").drop();
db.createCollection("admin");

// ----------------------------
// Documents of admin
// ----------------------------
db.getCollection("admin").insert([ {
    _id: ObjectId("5d566f2ff172bc2e4c005595"),
    username: "admin",
    email: "nguyenbaquang226@gmail.com",
    "password_hash": "$2y$13$S9tNIdKTVcg87MuKHah6BeHY2i07em39I46uoSm2Jq3mF7R8cc0dO",
    "auth_key": "ejP1v9p2wAXYHiNYiND3w_kCUA4ix3Ho",
    "verification_token": "9lfL5UH1YmvSUkQVG2_I1yZbMOS-zeaw_1565945647",
    status: "10"
} ]);
db.getCollection("admin").insert([ {
    _id: ObjectId("5d566fc1f172bc2e4c005596"),
    username: "admin111",
    email: "nguyenquang@gmail.com",
    "password_hash": "$2y$13$V7xfkYEGwJ.rWOgz.ufrZOrvyWb35Z9hCp4Is.SY6CzNkQZP/LHDa",
    "auth_key": "f2VKtcimNwVMKsopLeeZCofxCSZUJj3O",
    "verification_token": "dnW6J56g-xrQtfACIfaCe36HBV4CB9eo_1565945793",
    status: 10
} ]);
db.getCollection("admin").insert([ {
    _id: ObjectId("5d567642f172bc2e4c005597"),
    username: "superadmin",
    email: "nguyenbaquang@gmail.com",
    "password_hash": "$2y$13$O/.RXnvw9eFKSnkDVRtQW.210cMdnMeJCFdKEmfxQOG4CuKrGS9Ia",
    "auth_key": "B0fE0sKGdvYijYauQs-u3nb235LuHDH1",
    "verification_token": "nvofaooo9Y4K-T_69hIgx5iy3EJXUj8o_1565947458",
    status: 10
} ]);
db.getCollection("admin").insert([ {
    _id: ObjectId("5d5a5b89f172bc22e8003c4a"),
    username: "quang1998",
    email: "quang1998@gmail.com",
    "password_hash": "$2y$13$x5lWPp336Km.RhR8UuXixe8/lYiLunwceZ5fhMQeg1pfNBEz8W8xi",
    "auth_key": "qmygvAgLruRN0l7_LQVV_1_tzctus62R",
    "verification_token": "xjYl3z0Y511ISw3y2_Y4aM3geRIdB72Z_1566202761",
    status: 10
} ]);
db.getCollection("admin").insert([ {
    _id: ObjectId("5d5b98a2f172bc1b94002ae6"),
    username: "taitu",
    email: "taitu123@gmail.com",
    "password_hash": "$2y$13$TAQZap/frdPcUSDkEHuoxOa4bb38ak3131WxyCxWIzBvO.FDUB38G",
    "auth_key": "APqN0sQ06-RUqbpepi2lKJCDQAVhhnr9",
    "verification_token": "RIhpaamRCoxSmekIEthbWcupejd4uvvH_1566283938",
    status: "10"
} ]);
