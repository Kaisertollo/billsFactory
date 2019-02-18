import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { validateConfig } from '@angular/router/src/config';
import { Title } from '@angular/platform-browser';
@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})


export class HomePage {
  constructor(private http: HttpClient) { }
  url = 'https://jsonplaceholder.typicode.com/todos/1';
  configUrl = 'http://localhost/v.php';
  title = '';
  id_f = '';
  id_a = '';
  mois = '';
  conso = '';
  prix = '';
  etat = '';
myName = 'Aman';
  getConfig() {
    return this.http.get(this.configUrl);
  }
  setTitle(ss) {
    this.title = ss;
  }
  onclickb() {
    console.log('hello');
    this.title = 'sss';
/*this.getConfig().forEach(function(value) {
      const val = value[0];
      console.log(val['id']);
      // tslint:disable-next-line:forin
      /*for (const key2 in val) {
        const val2 = val[key2];
        console.log(key2 + ':' + val2);
      }
      this.setTitle(val['id']);
      console.log('---------------------------------------');
      // console.log(key + ':' + val);
     });
    console.log('-*********--');*/
    this.getConfig().subscribe(
      x =>  {
        console.log('Observer got a next value: ' + x);
        // this.title = x['prix'];
        console.log(x['prix']);
        this.id_f = x['id_facture'];
        this.id_a = x['id_abo'];
        this.prix = x['prix'];
        this.conso = x['consomation'];
        this.etat = x['etat'];
        this.mois = x['mois'];
        this.configUrl = 'http://localhost/v.php';
      }
    );
}
getName(input: string) {
    this.myName = input;
    console.log(this.myName);
    this.configUrl = this.configUrl + '?id=' + this.myName;
    this.onclickb();
}
}
