<<<<<<< HEAD
import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import 'rxjs/add/observable/throw';
import {Partenaire} from './partenaire';
import {AuthService} from './auth.service';
import { User } from './users';

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

  addPartenaire(partenaire,imageName) {
    const formData = new FormData();

    formData.append('imageName',imageName);
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

  registerUser(user,imageName) {
    const formData = new FormData();

    formData.append('imageName',imageName);
    formData.append('username',user.username);
    formData.append('password',user.password);
    formData.append('nomComplet',user.nomComplet);
    formData.append('adresse',user.adresse);
    formData.append('telephone',user.telephone);
    formData.append('email',user.email);
    formData.append('status',user.status);
    formData.append('profil',user.profil);
    console.log(this.authenticationService.token);
    console.log(user);
   return this.http.post(this._registerUrl, formData).map(res => res).catch(this.handelError);
  
  }
  public uploadImage(image: File): Observable<any> {
    const formData = new FormData();

    formData.append('imageName', image);

    return this.http.post(this.uri+'/uploadImage', formData);
  }
  depot(montant,id) {
    const formData = new FormData();
    formData.append('montant',montant);
    formData.append('id',id);
    console.log(this.authenticationService.token);
    console.log(montant);
   return this.http.post(this.uri+'/bankAccount/depot/ajout', formData).map(res => res).catch(this.handelErrorDep);
  
  }

  addCompte(solde,idPartenaire){
    const formData=new FormData();
    formData.append("solde",solde);
    formData.append("partenaire",idPartenaire);
    return this.http.post(this.uri+'/bankAccount/ajout',formData).map(res=>res).catch(this.handelErrorDep);
  }
  getPartenaireCompte(){
    const formData=new FormData();
    formData.append('username',localStorage.getItem('currentUser'));
    return this.http.post(this.uri+'/bankAccount/partenaireCompte',formData).map(res => res).catch(this.handelError);
  }

  passwordChange(userData) {
    console.log(userData);
    const formData = new FormData();
    formData.append('password',userData.password);
    formData.append('username',userData.username);
    console.log(formData);
   return this.http.post(this.uri+'/user/passwordReset', formData).map(res => res).catch(this.handelError);
  
  }

  bloquerPartenaire(ninea){
    const formData=new FormData();
    formData.append('ninea',ninea);
    return this.http.post(this.uri+'/bloquer/partenaire',formData).map(res => res).catch(this.handelError);
  }

  bloquerUser(username){
    const formData=new FormData();
    formData.append('username',username);
    return this.http.post(this.uri+'/users/bloquer',formData).map(res => res).catch(this.handelError);
  }

  editUser(id,user){
    const formData=new FormData();
    formData.append('compteId',user.compte);
    formData.append('username',user.username);
    formData.append('password',user.password);
    formData.append('nomComplet',user.nomComplet);
    formData.append('adresse',user.adresse);
    formData.append('telephone',user.telephone);
    formData.append('email',user.email);
    formData.append('status',user.status);
    formData.append('profil',user.profil);
    return this.http.post(this.uri+'/users/'+id+'/edit',formData).map(res => res).catch(this.handelError);
  }

  editPartenaire(partenaire){
    const formData = new FormData();
    formData.append('nomComplet',partenaire.nomComplet);
    formData.append('adresse',partenaire.adresse);
    formData.append('telephone',partenaire.telephone);
    formData.append('email',partenaire.email);
    formData.append('status',partenaire.status);
    formData.append('ninea',partenaire.ninea);
    formData.append('raisonSocial',partenaire.raisonSocial);
    formData.append('solde',partenaire.solde);
    return this.http.post(this.uri+'/partenaire/edit',formData).map(res => res).catch(this.handelError);
  }

  showUser(id):Observable<User[]> {
    return this.http.get<User[]>(this.uri+'/users/show/'+id).map(res => res).catch(this.handelError);
  }

  findUser(){
    const formData=new FormData();
    return this.http.post(this.uri+'/users/findUser',formData).map(res => res).catch(this.handelError);
  }
  showPartenaire(id):Observable<Partenaire[]> {
    return this.http.get<Partenaire[]>(this.uri+'/partenaire/show/'+id).map(res => res).catch(this.handelError);
  }
  userCompte(idCompte,userId){
    const formData=new FormData();
    formData.append("idCompte",idCompte);
    formData.append("idUser",userId);
    return this.http.post(this.uri+'/bankAccount/userCompte',formData);
  }

  getUser(): Observable<any[]> {
    //console.log(this.headers);
    return  this.http.get<any>(this.uri+'/users/PartenaireUsers')
  }

  recupBeneficiaire(code):Observable<any[]> {
   let formData=new FormData();
   formData.append('code',code);
   return this.http.post<any>(this.uri+'/recupBeneficiaire',formData).catch(this.handelError);
  }
  

  getCompte(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/bankAccount' , this.headers)
  }

  getHistoOp(): Observable<any[]> {
    return  this.http.get<any>(this.uri+'/usersOp')
  }

  listOperationsPartenaires():Observable<any[]>{
    return this.http.get<any>(this.uri+'/partenaireOp')
  }

  retraitTransact(code,beneficiaire){
    let formData=new FormData();
    formData.append('code',code);
    formData.append('typePiece',beneficiaire.typePiece);
    formData.append('numeroPiece',beneficiaire.numeroPiece);
    return this.http.post(this.uri+'/transaction/retrait',formData).catch(this.handelError);
  }

  envoiTransact(expediteur,beneficiaire){
    const formData=new FormData();
    formData.append('nomComplet',expediteur.nomComplet);
    formData.append('adresse',expediteur.adresse);
    formData.append('telephone',expediteur.telephone);
    formData.append('numeroPiece',expediteur.numeroPiece);
    formData.append('typePiece',expediteur.typePiece);
    formData.append('nomCompletR',beneficiaire.nomComplet);
    formData.append('adresseR',beneficiaire.adresse);
    formData.append('telephoneR',beneficiaire.telephone);
    formData.append('montant',beneficiaire.montant);

    return this.http.post(this.uri+'/transaction/envoie',formData).map(res => res).catch(this.handelError);
  }

 downloadContrat(id):Observable<Partenaire[]> {
   const formData=new FormData();
   formData.append("id",id);
   return this.http.post<Partenaire[]>(this.uri+'/partenaire/contrat',formData).map(res=>res).catch(this.handelError);
 }

  private handelError(error: Response) {

    return Observable.throw(error || 'server error');

  }
  private handelErrorDep(error: Response) {

    return Observable.throw(error || 'server error');

  }

=======
import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/catch';
import 'rxjs/add/operator/map';
import 'rxjs/add/observable/throw';
import {Partenaire} from './partenaire';
import {AuthService} from './auth.service';
import { User } from './users';

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

  addPartenaire(partenaire,imageName) {
    const formData = new FormData();

    formData.append('imageName',imageName);
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

  registerUser(user,imageName) {
    const formData = new FormData();

    formData.append('imageName',imageName);
    formData.append('username',user.username);
    formData.append('password',user.password);
    formData.append('nomComplet',user.nomComplet);
    formData.append('adresse',user.adresse);
    formData.append('telephone',user.telephone);
    formData.append('email',user.email);
    formData.append('status',user.status);
    formData.append('profil',user.profil);
    console.log(this.authenticationService.token);
    console.log(user);
   return this.http.post(this._registerUrl, formData).map(res => res).catch(this.handelError);
  
  }
  public uploadImage(image: File): Observable<any> {
    const formData = new FormData();

    formData.append('imageName', image);

    return this.http.post(this.uri+'/uploadImage', formData);
  }
  depot(montant,id) {
    const formData = new FormData();
    formData.append('montant',montant);
    formData.append('id',id);
    console.log(this.authenticationService.token);
    console.log(montant);
   return this.http.post(this.uri+'/bankAccount/depot/ajout', formData).map(res => res).catch(this.handelErrorDep);
  
  }

  addCompte(solde,idPartenaire){
    const formData=new FormData();
    formData.append("solde",solde);
    formData.append("partenaire",idPartenaire);
    return this.http.post(this.uri+'/bankAccount/ajout',formData).map(res=>res).catch(this.handelErrorDep);
  }
  getPartenaireCompte(){
    const formData=new FormData();
    formData.append('username',localStorage.getItem('currentUser'));
    return this.http.post(this.uri+'/bankAccount/partenaireCompte',formData).map(res => res).catch(this.handelError);
  }

  passwordChange(userData) {
    console.log(userData);
    const formData = new FormData();
    formData.append('password',userData.password);
    formData.append('username',userData.username);
    console.log(formData);
   return this.http.post(this.uri+'/user/passwordReset', formData).map(res => res).catch(this.handelError);
  
  }

  bloquerPartenaire(ninea){
    const formData=new FormData();
    formData.append('ninea',ninea);
    return this.http.post(this.uri+'/bloquer/partenaire',formData).map(res => res).catch(this.handelError);
  }

  bloquerUser(username){
    const formData=new FormData();
    formData.append('username',username);
    return this.http.post(this.uri+'/users/bloquer',formData).map(res => res).catch(this.handelError);
  }

  editUser(id,user){
    const formData=new FormData();
    formData.append('compteId',user.compte);
    formData.append('username',user.username);
    formData.append('password',user.password);
    formData.append('nomComplet',user.nomComplet);
    formData.append('adresse',user.adresse);
    formData.append('telephone',user.telephone);
    formData.append('email',user.email);
    formData.append('status',user.status);
    formData.append('profil',user.profil);
    return this.http.post(this.uri+'/users/'+id+'/edit',formData).map(res => res).catch(this.handelError);
  }

  editPartenaire(partenaire){
    const formData = new FormData();
    formData.append('nomComplet',partenaire.nomComplet);
    formData.append('adresse',partenaire.adresse);
    formData.append('telephone',partenaire.telephone);
    formData.append('email',partenaire.email);
    formData.append('status',partenaire.status);
    formData.append('ninea',partenaire.ninea);
    formData.append('raisonSocial',partenaire.raisonSocial);
    formData.append('solde',partenaire.solde);
    return this.http.post(this.uri+'/partenaire/edit',formData).map(res => res).catch(this.handelError);
  }

  showUser(id):Observable<User[]> {
    return this.http.get<User[]>(this.uri+'/users/show/'+id).map(res => res).catch(this.handelError);
  }

  findUser(){
    const formData=new FormData();
    return this.http.post(this.uri+'/users/findUser',formData).map(res => res).catch(this.handelError);
  }
  showPartenaire(id):Observable<Partenaire[]> {
    return this.http.get<Partenaire[]>(this.uri+'/partenaire/show/'+id).map(res => res).catch(this.handelError);
  }
  userCompte(idCompte,userId){
    const formData=new FormData();
    formData.append("idCompte",idCompte);
    formData.append("idUser",userId);
    return this.http.post(this.uri+'/bankAccount/userCompte',formData);
  }

  getUser(): Observable<any[]> {
    //console.log(this.headers);
    return  this.http.get<any>(this.uri+'/users/PartenaireUsers')
  }

  recupBeneficiaire(code):Observable<any[]> {
   let formData=new FormData();
   formData.append('code',code);
   return this.http.post<any>(this.uri+'/recupBeneficiaire',formData).catch(this.handelError);
  }
  

  getCompte(): Observable<any[]> {
    console.log(this.headers);
    return  this.http.get<any>(this.uri+'/bankAccount' , this.headers)
  }

  getHistoOp(): Observable<any[]> {
    return  this.http.get<any>(this.uri+'/usersOp')
  }

  listOperationsPartenaires():Observable<any[]>{
    return this.http.get<any>(this.uri+'/partenaireOp')
  }

  retraitTransact(code,beneficiaire){
    let formData=new FormData();
    formData.append('code',code);
    formData.append('typePiece',beneficiaire.typePiece);
    formData.append('numeroPiece',beneficiaire.numeroPiece);
    return this.http.post(this.uri+'/transaction/retrait',formData).catch(this.handelError);
  }

  envoiTransact(expediteur,beneficiaire){
    const formData=new FormData();
    formData.append('nomComplet',expediteur.nomComplet);
    formData.append('adresse',expediteur.adresse);
    formData.append('telephone',expediteur.telephone);
    formData.append('numeroPiece',expediteur.numeroPiece);
    formData.append('typePiece',expediteur.typePiece);
    formData.append('nomCompletR',beneficiaire.nomComplet);
    formData.append('adresseR',beneficiaire.adresse);
    formData.append('telephoneR',beneficiaire.telephone);
    formData.append('montant',beneficiaire.montant);

    return this.http.post(this.uri+'/transaction/envoie',formData).map(res => res).catch(this.handelError);
  }

 downloadContrat(id):Observable<Partenaire[]> {
   const formData=new FormData();
   formData.append("id",id);
   return this.http.post<Partenaire[]>(this.uri+'/partenaire/contrat',formData).map(res=>res).catch(this.handelError);
 }

  private handelError(error: Response) {

    return Observable.throw(error || 'server error');

  }
  private handelErrorDep(error: Response) {

    return Observable.throw(error || 'server error');

  }

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}