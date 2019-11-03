use symfony
db.getCollection("User").save({
    "firstname" : "Assan", 
    "lastname" : "DIOMANDE", 
    "email" : "admin@gmail.com", 
    "password" : "$2y$13$E39qiHMvC1w7xTqkfNaUcemVfR.YMK5LD8IZ2lhGjuJKDc7qqzy3e", 
    "isAdmin" : true
})
db.getCollection("User").find({})
