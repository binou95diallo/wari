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
  private _registerUrl = "http://localhost:8000/api/register";
  

  constructor(private http: HttpClient, private authenticationService: AuthService  ) {}
  private headers = {headers:new HttpHeaders().set( 'Authorization','Bearer '+localStorage.getItem('token'))};
  getPartenaire(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/partenaire/partenaires' , this.headers)
  }

  addPartenaire(partenaire) {/* 
    const  headers = new HttpHeaders();
    headers.append('content-type', 'application/json');
    headers.append('Authorization', 'Bearer '+ this.authenticationService.token); */
    const formData = new FormData();

    formData.append('imageName', partenaire.imageName);
    formData.append('username',partenaire.username);
    formData.append('password',partenaire.password);
    formData.append('nomComplet',partenaire.nomComplet);
    formData.append('adresse',partenaire.adresse);
    formData.append('telephone',partenaire.telephone);
    formData.append('email',partenaire.email);
    formData.append('status',partenaire.status);
    formData.append('profil',partenaire.profil);
    formData.append('ninea',partenaire.ninea);
    formData.append('raisonSocial',partenaire.raisonSocial);
    formData.append('solde',partenaire.solde);
    const  headers = new HttpHeaders();
    console.log(this.authenticationService.token);
    console.log(partenaire);
    console.log(headers);
    return this.http.post(this.uri+'/partenaire/ajout',formData).map(res => res).catch(this.handelError);
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

  registerUser(user) {
    const formData = new FormData();

    formData.append('imageName', user.imageName);
    formData.append('username',user.username);
    formData.append('password',user.password);
    formData.append('nomComplet',user.nomComplet);
    formData.append('adresse',user.adresse);
    formData.append('telephone',user.telephone);
    formData.append('email',user.email);
    formData.append('status',user.status);
    formData.append('profil',user.profil);
    const  headers = new HttpHeaders();
    console.log(this.authenticationService.token);
    console.log(user);
    console.log(headers);
   return this.http.post(this._registerUrl, formData).map(res => res).catch(this.handelError);
  
  }
  public uploadImage(image: File): Observable<any> {
    const formData = new FormData();

    formData.append('imageName', image);

    return this.http.post(this.uri+'/uploadImage', formData);
  }
  depot(montant) {
    const formData = new FormData();
    formData.append('montant',montant);
    const  headers = new HttpHeaders();
    console.log(this.authenticationService.token);
    console.log(montant);
    console.log(headers);
   return this.http.post(this.uri+'/bankAccount/depot/ajout', formData).map(res => res).catch(this.handelError);
  
  }
  getUser(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uriU+'/users' , this.headers)
  }

  getCompte(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/bankAccount' , this.headers)
  }

  getHistoOp(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/usersOp' , this.headers)
  }
  private handelError(error: Response) {

    return Observable.throw(error || 'server error');

  }

}