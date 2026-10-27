CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE cats (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    cat_name VARCHAR(255) NOT NULL,
    gender ENUM('ذكر', 'انثى') NOT NULL,
    age VARCHAR(50) NOT NULL ,
    health VARCHAR(255) NOT NULL,
    breed VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(512),
    adopt_status TINYINT(1) DEFAULT 0,
    user_id int(11),
    adopt_date DATE DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      1,
    'وايتي',
    'انثى',
    'ثمانية أشهر',
    'جيدة',
    'شيرازي',
    '1.png',
    'تعتبر قط الشيرازي من أفضل أنواع القطط المنزلية المناسبة للمبتدئين بسبب سلوكها وطبعها الهادئ وحبها الشديد لأصحابها، وعلى الرغم من سعره الباهظ  ومظهره الجذاب.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      2,
    'ناليا',
    'انثى',
    'تسعة أشهر',
    'جيدة',
    'هيملايا',
    '2.png',
    'قط الهملايا في السنين القديمة قرر المربون في أمريكا الشمالية خلق مزج جديد لعالم القطط بين القطه الفارسية والسيامية وهذا ما نتج واعترف بها في الأوان الأخيرة كقطه فارسيه ولها مواصفات معينه تتصف بها هذه القطه الجميلة من لون معطفها السيامي.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      3,
    'بوجي',
    'ذكر',
    'عشرة أشهر',
    'جيدة',
    'بلدي',
    '3.png',
    'نوع من القطط المحلية التي تتميز بقدرتها العالية على التكيّف مع بيئتها. تعود أصول هذه السلالة المتنوعة إلى التعايش الطويل بين الإنسان والحيوان في الأحياء، حيث تطورت مع مرور الزمن لتصبح جزءاً من النسيج الاجتماعي والمعماري في المدن والقرى.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      4,
    'توت',
    'انثى',
    '11 شهر',
    'جيدة',
    'سيامي',
    '4.png',
    ' تشتهر القطط السيامية بأنّها قطط حنونة واجتماعية، وعادةً ما تتبع مالكها أينما ذهب داخل المنزل. قد تُصاب القطط السيامية بالاكتئاب في حال تُركت لوحدها لمدة طويلة.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      5,
    'ناليا',
    'انثى',
    'سنة',
    'جيدة',
    'هيملايا',
    '5.png',
    'قط الهملايا في السنين القديمة قرر المربون في أمريكا الشمالية خلق مزج جديد لعالم القطط بين القطه الفارسية والسيامية وهذا ما نتج واعترف بها في الأوان الأخيرة كقطه فارسيه ولها مواصفات معينه تتصف بها هذه القطه الجميلة من لون معطفها السيامي.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      6,
    'اسود',
    'انثى',
    'سنة ونصف',
    'جيدة',
    'بلدي',
    '6.png',
    'نوع من القطط المحلية التي تتميز بقدرتها العالية على التكيّف مع بيئتها. تعود أصول هذه السلالة المتنوعة إلى التعايش الطويل بين الإنسان والحيوان في الأحياء، حيث تطورت مع مرور الزمن لتصبح جزءاً من النسيج الاجتماعي والمعماري في المدن والقرى.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      7,
    'لوزي',
    'ذكر',
    'سنتان',
    'جيدة',
    'سيامي',
    '7.png',
    ' تشتهر القطط السيامية بأنّها قطط حنونة واجتماعية، وعادةً ما تتبع مالكها أينما ذهب داخل المنزل. قد تُصاب القطط السيامية بالاكتئاب في حال تُركت لوحدها لمدة طويلة.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      8,
    'مارتي',
    'ذكر',
    'سنة ونصف',
    'جيدة',
    'شيرازي',
    '8.png',
    'تعتبر قط الشيرازي من أفضل أنواع القطط المنزلية المناسبة للمبتدئين بسبب سلوكها وطبعها الهادئ وحبها الشديد لأصحابها، وعلى الرغم من سعره الباهظ  ومظهره الجذاب.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      9,
    'جوس',
    'ذكر',
    'تسعة أشهر',
    'جيدة',
    'بلدي',
    '9.png',
    'نوع من القطط المحلية التي تتميز بقدرتها العالية على التكيّف مع بيئتها. تعود أصول هذه السلالة المتنوعة إلى التعايش الطويل بين الإنسان والحيوان في الأحياء، حيث تطورت مع مرور الزمن لتصبح جزءاً من النسيج الاجتماعي والمعماري في المدن والقرى.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      10,
    'بيكي',
    'ذكر',
    'سنة ونصف',
    'جيدة',
    'هيملايا',
    '10.png',
    'قط الهملايا في السنين القديمة قرر المربون في أمريكا الشمالية خلق مزج جديد لعالم القطط بين القطه الفارسية والسيامية وهذا ما نتج واعترف بها في الأوان الأخيرة كقطه فارسيه ولها مواصفات معينه تتصف بها هذه القطه الجميلة من لون معطفها السيامي.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      11,
    'مارتي',
    'ذكر',
    ' ثلاث سنوات',
    'جيدة',
    'شيرازي',
    '11.png',
    'تعتبر قط الشيرازي من أفضل أنواع القطط المنزلية المناسبة للمبتدئين بسبب سلوكها وطبعها الهادئ وحبها الشديد لأصحابها، وعلى الرغم من سعره الباهظ  ومظهره الجذاب.'
);
INSERT INTO cats (cat_id, cat_name, gender, age, health, breed, image_url, description ) 
    VALUES (
      12,
    'صوفي',
    'ذكر',
    'سنة',
    'جيدة',
    'بلدي',
    '12.png',
    'نوع من القطط المحلية التي تتميز بقدرتها العالية على التكيّف مع بيئتها. تعود أصول هذه السلالة المتنوعة إلى التعايش الطويل بين الإنسان والحيوان في الأحياء، حيث تطورت مع مرور الزمن لتصبح جزءاً من النسيج الاجتماعي والمعماري في المدن والقرى.'
);


-- UPDATE cats 
-- SET 
--     adopt_status = 1,
--     adopt_date = CURDATE(),
--     user_id = 123 -- استبدال الرقم بمعرف المستخدم الفعلي
-- WHERE cat_id = 1;