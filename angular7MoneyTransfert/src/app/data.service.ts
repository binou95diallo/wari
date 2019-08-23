import { Injectable } from '@angular/core';
import {Http, Response, Headers } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import 'rxjs/add/observable/throw';
import {Partenaire} from './partenaire';
import {AuthService} from './auth.service';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  private uri= 'http://127.0.0.1:8000/partenaire';
  private _registerUrl = "http://localhost:8000/api/register";


  constructor(private http: Http, private authenticationService: AuthService  ) {}

  getPartenaire(): Observable<any[]> {
    const headers = new Headers({ 'Authorization': 'Bearer ' + this.authenticationService.token });
    return  this.http.get(this.uri+'/partenaires' , {headers : headers}).map(res => <Partenaire[]> res.json() ).catch(this.handelError);

  }

  addPartenaire(Partenaire: Partenaire) {
    const  headers = new Headers();
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer ' + this.authenticationService.token);
    return this.http.post(this.uri+'/ajout', JSON.stringify(Partenaire), {headers : headers}).map(res => res.json()).catch(this.handelError);
  }



  updatePartenaire(partenaire: Partenaire , id) {
    const  headers = new Headers();
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer ' + this.authenticationService.token);
    return this.http.put(this.uri + id + '/edit' , JSON.stringify(partenaire), {headers : headers}).map(res => res.json()).catch(this.handelError);
  }


  deletePartenaire(id: any) {
    const  headers = new Headers();
    headers.append('Authorization', 'Bearer ' + this.authenticationService.token);
    return this.http.delete(this.uri + '/' + id, {headers : headers}).map(res => res.json());
  }

  registerUser(user: {}) {
    const  headers = new Headers();
    console.log(this.authenticationService.token);
    console.log(user);
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer ' + JSON.parse(localStorage.getItem('token')));
    console.log(headers);
    return this.http.post(this._registerUrl, JSON.stringify(user), {headers : headers}).map(res => res.json()).catch(this.handelError);
  
  }
  private handelError(error: Response) {

    return Observable.throw(error.json().errors || 'server error');

  }

}