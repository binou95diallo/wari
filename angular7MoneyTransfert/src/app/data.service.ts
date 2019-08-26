import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import 'rxjs/add/observable/throw';
import {Partenaire} from './partenaire';
import {AuthService} from './auth.service';
import { throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  private uri= 'http://localhost:8000/api';
  private uriU= 'http://localhost:8000/api/user';
  private uriC= 'http://localhost:8000/api';
  private _registerUrl = "http://localhost:8000/api/register";
  

  constructor(private http: HttpClient, private authenticationService: AuthService  ) {}
  private headers = {headers:new HttpHeaders().set( 'Authorization','Bearer '+localStorage.getItem('token'))};
  getPartenaire(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/partenaire/partenaires' , this.headers)
  }

  addPartenaire(Partenaire: Partenaire) {
    const  headers = new HttpHeaders();
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer '+ this.authenticationService.token);
    return this.http.post(this.uri+'/ajout', JSON.stringify(Partenaire), {headers : headers});
  }



  updatePartenaire(partenaire: Partenaire , id) {
    const  headers = new HttpHeaders();
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer ' + this.authenticationService.token);
    return this.http.put(this.uri + id + '/edit' , JSON.stringify(partenaire), {headers : headers}).map(res => res).catch(this.handelError);
  }


  deletePartenaire(id: any) {
    const  headers = new HttpHeaders();
    headers.append('Authorization', 'Bearer ' + this.authenticationService.token);
    return this.http.delete(this.uri + '/' + id, {headers : headers}).map(res => res);
  }

  registerUser(user: {}) {
    const  headers = new HttpHeaders();
    console.log(this.authenticationService.token);
    console.log(user);
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer ' + localStorage.getItem('token'));
    console.log(headers);
    return this.http.post(this._registerUrl, user, {headers : headers}).map(res => res).catch(this.handelError);
  
  }
  getUser(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uriU+'/users' , this.headers)
  }

  getCompte(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uriC+'/bankAccount' , this.headers)
  }

  getHistoOp(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uriC+'/usersOp' , this.headers)
  }
  private handelError(error: Response) {

    return Observable.throw(error || 'server error');

  }

}