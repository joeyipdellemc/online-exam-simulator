import csv
import MySQLdb

mydb = MySQLdb.connect(host='localhost',
    user='joeyip',
    passwd='abc123',
    db='db_exam')
cursor = mydb.cursor()

csv_data = csv.reader(file('Answer.csv'))
for row in csv_data:
	try:
		cursor.execute('INSERT INTO `tbl_ans`(`quesNo`, `rightAns`, `ans`)VALUES(%s, %s, %s)',row)
		#close the connection to the database.
		mydb.commit()
		print ('row')
		#cursor.close()
 	except Exception as e:
                print("MySQL Exception:", e)
        print("Done importing data.")
