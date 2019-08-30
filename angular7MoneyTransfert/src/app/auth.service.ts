import { Injectable, OnInit } from '@angular/core';
import {Http, Headers, Response, URLSearchParams} from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import 'rxjs/add/observable/throw';
import { JwtHelperService } from "@auth0/angular-jwt";

@Injectable()
export class AuthService{
 
  public token: string;
   numberConnexion=null;
  message:any;
  compteur=0;

  roles: Array<string>;
  private _registerUrl = "http://localhost:8000/api/register";
  constructor(private http: Http) {
    //localStorage permet de garder les infos de l'utilisateur durant sa connexion un peu comme les sessions
    /* const currentUser = JSON.parse(localStorage.getItem('currentUser'));
    console.log(currentUser); */
    /* this.compteur=this.compteur+1;
    this.numberConnexion=JSON.stringify(this.compteur);
    localStorage.setItem('numberConnexion',this.numberConnexion); */
  }
  public getToken(): string {
    let token=localStorage.getItem('token');
    const JWThelper = new JwtHelperService();
    const objJWT = JWThelper.decodeToken(localStorage.getItem('token'));
    this.roles=objJWT.roles;
    //this.parseJWT();
    return token;
  }
ngOnInit(){
 
}

  login(username: string, password: string):Observable<any>{
    let headers = new Headers();
    let nbConnex;
    headers.append('content-type', 'application/x-www-form-urlencoded');

    return this.http.post('http://127.0.0.1:8000/api/login_check', {'username':username,'password':password},{headers : headers} )
      .map((response: Response) => {
        // login successful if there's a jwt token in the response
        const token = response.json().token;
        
        console.log(token);
        if (token) {
          // set token property
          this.token = token;
          if(!response.status){
            alert(response);
          }
          // store username and jwt token in local storage to keep user logged in between page refreshes
          nbConnex=localStorage.getItem('numberConnexion');
          if(nbConnex== null){
            this.compteur=1;
            this.numberConnexion=this.compteur.toString();
          }
         else {
          nbConnex=Number(nbConnex)+1;
          console.log(nbConnex);
          this.numberConnexion=nbConnex.toString();
        }
          localStorage.setItem('currentUser',username);
          localStorage.setItem('token',token);
          localStorage.setItem('numberConnexion',this.numberConnexion);
          this.parseJWT();
          // return true to indicate successful login
          return true;
        } else {
          // return false to indicate failed login
          return false;
        }
      }).catch(this.handelError);
  }
  parseJWT(){
    const JWThelper = new JwtHelperService();
    const objJWT = JWThelper.decodeToken(this.getToken());
    this.roles=objJWT.roles;
    console.log(this.roles.indexOf("ROLE_USER"));
    console.log(objJWT);
  }
  isAdmin(){
    return this.roles && this.roles.indexOf("ROLE_ADMIN")>=0;
  }

  isUser(){
    return this.roles && this.roles.indexOf("ROLE_USER")>=0;
  }
  isCaissier(){
    return this.roles && this.roles.indexOf("ROLE_CAISSIER")>=0;
  }

  isAuthenticated(){
    return this.roles && (this.isUser());
  }

  logout(): void {
    // clear token remove user from local storage to log user out
    this.token = null;
    localStorage.removeItem('currentUser');
    localStorage.removeItem('token');
  }

  private handelError(error: Response) {

    return Observable.throw(error.json() || 'server error');

  }




}