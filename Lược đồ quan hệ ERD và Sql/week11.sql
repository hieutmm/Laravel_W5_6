a) Liệt kê danh sách Giảng viên

SELECT * FROM teachers JOIN users ON users.`user_id` = teachers.`user_id` 

b) Liệt kê danh sách Sinh viên

SELECT * FROM students JOIN users ON users.`user_id` = students.`user_id`

c) Liệt kê các môn học

SELECT * FROM courses

d) Liệt kê các môn học do Giảng viên Nguyễn Văn A phụ trách
SELECT * FROM courses join teachers on teachers.teacher_id = courses.teacher_id 
JOIN users on users.user_id = teachers.user_id WHERE users.user_name = "Nguyễn Văn A"

e) Liệt kê sinh viên học môn Thực tập doanh nghiệp do Giảng viên Nguyễn Văn A phụ trách trong năm học 2020-2021 Học kỳ 1

SELECT DISTINCT students.* FROM teachers JOIN users ON users.`user_id` = teachers.`user_id` 
JOIN courses ON teachers.`teacher_id` = courses.`teacher_id` 
JOIN classes_has_courses ON classes_has_courses.`course_id` = courses.`course_id` 
JOIN classes ON classes.`class_id` = classes_has_courses.`class_id` 
JOIN students ON students.`class_id` = classes.`class_id`
WHERE courses.course_name = "Thực tập doanh nghiệp" AND users.user_name = "Nguyễn Văn A" AND classes.year_school = "2020-2021 Học kỳ 1"

f) Liệt kê thông tin công ty thực tập của sinh viên học môn Thực tập doanh nghiệp do Giảng viên Nguyễn Văn A phụ trách trong năm học 2020-2021 Học kỳ 1

SELECT DISTINCT companies.* FROM teachers 
JOIN users ON users.`user_id` = teachers.`user_id` 
JOIN courses ON teachers.`teacher_id` = courses.`teacher_id` 
JOIN classes_has_courses ON classes_has_courses.`course_id` = courses.`course_id` 
JOIN classes ON classes.`class_id` = classes_has_courses.`class_id` 
JOIN students ON students.`class_id` = classes.`class_id` 
JOIN trainers ON students.`trainer_id` = trainers.`trainer_id` 
JOIN companies ON companies.`company_id` = trainers.`company_id` 
WHERE courses.`course_name` = "Thực tập doanh nghiệp" AND users.`user_name` = "Nguyễn Văn A" AND classes.`year_school` = "2020-2021 Học kỳ 1"

g) Liệt kê nhật ký thực tập của sinh viên Nguyễn Văn A
	Chú ý: sinh viên học nhiều lần (do rớt, do hủy học phần, ...)

SELECT DISTINCT intership_diary_weeks.* FROM students
JOIN users ON users.`user_id` = students.`user_id`
JOIN intership_diary_weeks ON intership_diary_weeks.`student_id` = students.`student_id`
WHERE users.`user_name` = "Nguyễn Văn A"

h) Liệt kê chi tiết nhật ký thực tập của môn học Thực tập doanh nghiệp năm học 2020-2021 Học kỳ 1

SELECT diary_days_of_weeks.intership_diary_week_id, diary_days_of_weeks.intership_diary_week_date, diary_days_of_weeks.intership_diary_week_description 
FROM students 
join intership_diary_weeks on students.student_id = intership_diary_weeks.student_id
join diary_days_of_weeks on diary_days_of_weeks.intership_diary_week_id = intership_diary_weeks.intership_diary_week_id
join classes on classes.class_id = students.class_id
WHERE classes.year_school = "2020-2021 Học kỳ 1"

i) Liệt kê nhận xét của Giảng viên hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1

SELECT comments.comment FROM comments 
JOIN teachers ON comments.user_id = teachers.user_id JOIN
JOIN diary_days_of_weeks ON diary_days_of_weeks.`diary_days_of_week_id` = comments.`diary_days_of_week_id`
JOIN intership_diary_weeks ON intership_diary_weeks.`intership_diary_week_id` = diary_days_of_weeks.`intership_diary_week_id`
JOIN students ON students.`student_id` = intership_diary_weeks.`student_id`
JOIN users ON users.`user_id` = students.`user_id`
JOIN classes ON classes.`class_id` = students.`class_id`
WHERE users.user_name = "Nguyễn Văn B" AND classes.year_school = "2020-2021 Học kỳ 1"

j) Liệt kê nhận xét của người hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1

SELECT comments.comment FROM comments
JOIN trainers ON trainers.`user_id` = comments.`user_id`
JOIN diary_days_of_weeks ON diary_days_of_weeks.`diary_days_of_week_id` = comments.`diary_days_of_week_id`
JOIN intership_diary_weeks ON intership_diary_weeks.`intership_diary_week_id` = diary_days_of_weeks.`intership_diary_week_id`
JOIN students ON students.`student_id` = intership_diary_weeks.`student_id`
JOIN users ON users.`user_id` = students.`user_id`
JOIN classes ON classes.`class_id` = students.`class_id`
WHERE users.`user_name` = "Nguyễn Văn B" AND classes.`year_school` = "2020-2021 Học kỳ 1"

