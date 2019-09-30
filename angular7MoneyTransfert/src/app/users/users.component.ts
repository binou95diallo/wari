<<<<<<< HEAD
import { Component, OnInit,ViewChild } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit,faLock,faLockOpen,faPlus } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';
import {MatPaginator,MatSort,MatTableDataSource} from '@angular/material';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import Swal from 'sweetalert2';
import { Compte } from '../compte';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  displayedColumns: string[] = [
    'username','adresse','nomComplet','profil','status','id','compte'];
    displayedColumnsCompte: string[] = ['numeroCompte','solde','attribuer'];
  dataSource: MatTableDataSource<User>;
  dataSources: MatTableDataSource<Compte>;
  @ViewChild(MatPaginator,{static: true} as any) paginator: MatPaginator;
  @ViewChild(MatSort,{static: true} as any) sort: MatSort;
  faEdit = faEdit;
  faLock=faLock;
  faLockOpen=faLockOpen;
  faPlus=faPlus;
  message:string;
  compteData:{};
  user: User[];
  idUser:number;
  idCompte:number;
     errorMessage: string;
     statut:string;
     compte:{};
     ajoutCompte:string;
  constructor(private data: DataService, private router:Router, private toastr: ToastrService) { 
  }

  loadCompte(data){
    this.dataSources = new MatTableDataSource(data);
    this.dataSources.paginator = this.paginator;
    this.dataSources.sort = this.sort;
    
  }
  
  getUser() {
    this.data.getUser().subscribe(
     data => {this.user = data
      console.log(data)
      this.load(this.user)
    
    }, error => this.errorMessage = error,
    );
    console.log(this.user);
    //return this.user;
  }

  getPartenaireCompte(id){
    this.idUser=id;
    this.data.getPartenaireCompte().subscribe(
      data=>{
        this.ajoutCompte="ok"
        this.compteData=data
        this.loadCompte(data)
        
        console.log(data);
      },error => this.errorMessage = error.error.detail
    );
  }

  attribuerCompte(id){
    this.idCompte=id;
    console.log(id)
    this.data.userCompte(id,this.idUser).subscribe(
      data=>{
          this.compte=data;
          Swal.fire({ 
            position: 'center',
            type: 'success',
            title: "compte attribuer",
            showConfirmButton: false,
            timer: 2500
          }
          )
          this.router.navigateByUrl('/utilisateurs')
    },error => this.errorMessage = error)
  }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  }
 
  ngOnInit() {
    this.getUser();
    
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    this.dataSources.filter = filterValue.trim().toLowerCase();
    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }

    if (this.dataSources.paginator) {
      this.dataSources.paginator.firstPage();
    }
  }

  bloquerUser(username){
/* 
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
       
      }
    }) */
    this.data.bloquerUser(username).subscribe(
      data => {
        console.log(data)
        console.log(username)
        this.message=data.message
         this.toastr.success(this.message)
       // this.router.navigate(['/utilisateurs'])
        this.ngOnInit()
     }, error => this.errorMessage = error,
     );
    
     //window.location.reload();
  }
 
}
=======
import { Component, OnInit,ViewChild } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit,faLock,faLockOpen,faPlus } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';
import {MatPaginator,MatSort,MatTableDataSource} from '@angular/material';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import Swal from 'sweetalert2';
import { Compte } from '../compte';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  displayedColumns: string[] = [
    'username','adresse','nomComplet','profil','status','id','compte'];
    displayedColumnsCompte: string[] = ['numeroCompte','solde','attribuer'];
  dataSource: MatTableDataSource<User>;
  dataSources: MatTableDataSource<Compte>;
  @ViewChild(MatPaginator,{static: true} as any) paginator: MatPaginator;
  @ViewChild(MatSort,{static: true} as any) sort: MatSort;
  faEdit = faEdit;
  faLock=faLock;
  faLockOpen=faLockOpen;
  faPlus=faPlus;
  message:string;
  compteData:{};
  user: User[];
  idUser:number;
  idCompte:number;
     errorMessage: string;
     statut:string;
     compte:{};
     ajoutCompte:string;
  constructor(private data: DataService, private router:Router, private toastr: ToastrService) { 
  }

  loadCompte(data){
    this.dataSources = new MatTableDataSource(data);
    this.dataSources.paginator = this.paginator;
    this.dataSources.sort = this.sort;
    
  }
  
  getUser() {
    this.data.getUser().subscribe(
     data => {this.user = data
      console.log(data)
      this.load(this.user)
    
    }, error => this.errorMessage = error,
    );
    console.log(this.user);
    //return this.user;
  }

  getPartenaireCompte(id){
    this.idUser=id;
    this.data.getPartenaireCompte().subscribe(
      data=>{
        this.ajoutCompte="ok"
        this.compteData=data
        this.loadCompte(data)
        
        console.log(data);
      },error => this.errorMessage = error.error.detail
    );
  }

  attribuerCompte(id){
    this.idCompte=id;
    console.log(id)
    this.data.userCompte(id,this.idUser).subscribe(
      data=>{
          this.compte=data;
          Swal.fire({ 
            position: 'center',
            type: 'success',
            title: "compte attribuer",
            showConfirmButton: false,
            timer: 2500
          }
          )
          this.router.navigateByUrl('/utilisateurs')
    },error => this.errorMessage = error)
  }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  }
 
  ngOnInit() {
    this.getUser();
    
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    this.dataSources.filter = filterValue.trim().toLowerCase();
    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }

    if (this.dataSources.paginator) {
      this.dataSources.paginator.firstPage();
    }
  }

  bloquerUser(username){
/* 
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
       
      }
    }) */
    this.data.bloquerUser(username).subscribe(
      data => {
        console.log(data)
        console.log(username)
        this.message=data.message
         this.toastr.success(this.message)
       // this.router.navigate(['/utilisateurs'])
        this.ngOnInit()
     }, error => this.errorMessage = error,
     );
    
     //window.location.reload();
  }
 
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
