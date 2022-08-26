import imp
from mimetypes import init
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sns
data= pd.read_csv("mall_Customers.Csv")
data.head()
data.info()

data.rename(
    columns={'gender':'kelamin','Age':'usia','Annual Income (k$)':'pendapatan','Spending Score (1-100)':'pengeluaran'},inplace=True
)
data.head()
sns.histplot(data['kelamin'])
sns.histplot(data['usia'])

plt.scatter(data['usia'],data['pendapatan'])
plt.xlabel("Usia")
plt.ylabel("pendapatan")

sns.scatterplot(data=daya, x='usia', y='pendapatan',hue='kelamin')
df=data[['usia','pendapatan']]
df.head()
from sklearn.preprocssing import StandardScaler
sc= StandardScaler()
trf_data_x=sc.fit_transform(df)
trf_data_x[1:5]

from sklearn.cluster import KMeans
wcss=[]
for i in range(1,11):
    kmeans =KMeans(i,init='k-means++',random_state=12345)
    kmeans.fit(trf_data_x)
    wcss.append(kmeans.inertia_)

    plt.plot(range(1,11),wcss)
    plt.title('Elpow method')
    plt.xlabel('jumlah Cluser')
    plt.ylabel('wcss')
    plt.show()

    kmeans=KMeans(5,init='k-means++',random_state=12345)
    identifikasi_clusuter=kmeans.fit_predict(trf_data_x)
    identifikasi_clusuter

    pol_dt_cluser=df.copy()
    pol_dt_cluser['clusters']=identifikasi_clusuter
    pol_dt_cluser

    sns.scartterplot(
        x=pol_dt_cluser.usia,
        y=pol_dt_cluser.pendapatan,
        hue=pol_dt_cluser.clusters,
        palette="deep"
    );
    for i in range(5):
        usia_rata2=pol_dt_cluser[pol_dt_cluser['clusters']==i].usia.mean()
        pendapatan_rata2=pol_dt_cluser[pol_dt_cluser['clusters']==i].pendapatan.mean()

        print("Rata-rata usia {} dan {}. Rata-rata pendapatan adalah {}".format)(
            i,
            round(usia_rata2,0),
            round(pendapatan_rata2,0))