a) Liệt kê danh sách Giảng viên

SELECT * FROM teachers

b) Liệt kê danh sách Sinh viên

SELECT * FROM students

c) Liệt kê các môn học

SELECT * FROM courses

d) Liệt kê các môn học do Giảng viên Nguyễn Văn A phụ trách
SELECT * FROM teachers join classes on teachers.class_id = classes.class_id WHERE teachers.teacher_name = "Nguyễn Văn A"

e) Liệt kê sinh viên học môn Thực tập doanh nghiệp do Giảng viên Nguyễn Văn A phụ trách trong năm học 2020-2021 Học kỳ 1

SELECT students.student_id, students.student_name FROM students 
join classes on students.class_id = classes.class_id 
join teachers on classes.class_id = teachers.class_id
join courses on courses.teacher_id = teachers.teacher_id
WHERE courses.course_name = "Thực tập doanh nghiệp" AND teachers.teacher_name = "Nguyễn Văn A" AND classes.year_school = "2020-2021 Học kỳ 1"

f) Liệt kê thông tin công ty thực tập của sinh viên học môn Thực tập doanh nghiệp do Giảng viên Nguyễn Văn A phụ trách trong năm học 2020-2021 Học kỳ 1

SELECT companies.company_id, companies.company_name FROM companies
join trainers on companies.company_id = trainers.trainer_id
join students on students.student_id = trainers.trainer_id
join classes on students.class_id = classes.class_id 
join teachers on classes.class_id = teachers.class_id
join courses on courses.teacher_id = teachers.teacher_id
WHERE courses.course_name = "Thực tập doanh nghiệp" AND teachers.teacher_name = "Nguyễn Văn A" AND classes.year_school = "2020-2021 Học kỳ 1"

g) Liệt kê nhật ký thực tập của sinh viên Nguyễn Văn A
	Chú ý: sinh viên học nhiều lần (do rớt, do hủy học phần, ...)

SELECT * FROM students 
join intership_diary_weeks on students.student_id = intership_diary_weeks.student_id
join comment on comment.comment_id = intership_diary_weeks.comment_id
WHERE students.student_name = "Nguyễn Văn A"

h) Liệt kê chi tiết nhật ký thực tập của môn học Thực tập doanh nghiệp năm học 2020-2021 Học kỳ 1

SELECT diary_days_of_weeks.intership_diary_week_id, diary_days_of_weeks.intership_diary_week_date, diary_days_of_weeks.intership_diary_week_description 
FROM students 
join intership_diary_weeks on students.student_id = intership_diary_weeks.student_id
join diary_days_of_weeks on diary_days_of_weeks.intership_diary_week_id = intership_diary_weeks.intership_diary_week_id
join classes on classes.class_id = students.class_id
WHERE classes.year_school = "2020-2021 Học kỳ 1"

i) Liệt kê nhận xét của Giảng viên hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1

SELECT * FROM students 
join intership_diary_weeks on students.student_id = intership_diary_weeks.student_id
join comment on comment.comment_id = intership_diary_weeks.comment_id
join teachers on teachers.user_id = comment.user_id
join classes on classes.class_id = students.class_id
WHERE teachers.teacher_name = " Nguyễn Văn B" AND classes.year_school = "2020-2021 Học kỳ 1"

j) Liệt kê nhận xét của người hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1

SELECT * FROM students
join intership_diary_weeks on students.student_id = intership_diary_weeks.student_id
join comment on comment.comment_id = intership_diary_weeks.comment_id
join trainers on trainers.user_id = comment.user_id
join classes on classes.class_id = students.class_id
WHERE teachers.teacher_name = " Nguyễn Văn B" AND classes.year_school = "2020-2021 Học kỳ 1"

