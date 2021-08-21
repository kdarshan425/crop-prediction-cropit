from flask import Flask, render_template, request
import pandas as pd
from pandas import read_csv 
from sklearn.model_selection import train_test_split
from sklearn import svm
import numpy as np
import pickle

model=pickle.load(open('crop.pkl','rb'))


app = Flask(__name__)

@app.route('/')
def home():
    return render_template('farmers.php')

@ app.route('/farmers', methods=['GET','POST'])
def crop_predict(): 
    if request.method=='POST':
        n = request.form['Nitrogen']
        p = request.form['Phosphorous']
        k = request.form['Pottasium']
        temp = request.form['temperature']
        humidity = request.form['humidity']
        ph = request.form['ph_level']
        rainfall = request.form['rainfall']
        print(n,p,k,temp,humidity,ph,rainfall)
        data = np.array([[n, p, k, temp, humidity, ph, rainfall]])
        pred = model.predict(data)
        print(pred[0])
        final= pred[0]     
        return render_template('after.html', data=final)     
    return render_template('farmers.php')


@app.route("/business")
def business():
    return render_template('business.php')

@app.route("/consumer")
def consumer():
    return render_template('consumer.php')
    

if __name__ == "__main__":
    app.run(debug=True, port=8000)