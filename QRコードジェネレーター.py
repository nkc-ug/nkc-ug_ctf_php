#pip install qrcode[pil]
#pip install mysqlclient

import mysql.connector
import qrcode
import cv2

#情報入力
id = input("id>>")
name = input("name>>")
password = input("password>>")


query = "INSERT INTO users VALUES ({0},{1},{2},false)".format(id,password,name)
connection = mysql.connector.connect(
    host='localhost',
    port=4306,
    user='root',
    passwd='ropa20932060',
    db='app',
    charset='utf8')
cursor = connection.cursor()
cursor.execute(query)
connection.commit()
connection.close()


#画像生成・保存・描写
img = qrcode.make('http://172.18.102.167/QRlogin.php?id={0}&password={1}'.format(id,password))
img.save("{0}_{1}.png".format(id,name))
cv2.namedWindow("Image",cv2.WINDOW_NORMAL)
cv2.imshow("Image", cv2.imread("{0}_{1}.png".format(id,name), cv2.IMREAD_UNCHANGED))
cv2.waitKey()
