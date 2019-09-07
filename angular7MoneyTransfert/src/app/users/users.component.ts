import { Component, OnInit,ViewChild } from '@angular/core';
import { DataService } from '../data.service';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import {User} from '../users';
import {MatPaginator,MatSort,MatTableDataSource} from '@angular/material';
import { Router } from '@angular/router';
import { ToastrService } from 'ngx-toastr';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  displayedColumns: string[] = [
    'nomComplet','username','adresse','profil','status','id'];
  dataSource: MatTableDataSource<User>;
  @ViewChild(MatPaginator,{static: true} as any) paginator: MatPaginator;
  @ViewChild(MatSort,{static: true} as any) sort: MatSort;
  faEdit = faEdit;
  user: User[];
     errorMessage: string;
     statut:string;
  constructor(private data: DataService, private router:Router, private toastr: ToastrService) { 
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

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
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
        //this.toastr.success("utilisateur bloqué")
       // this.router.navigate(['/utilisateurs'])
        this.ngOnInit()
     }, error => this.errorMessage = error,
     );
    
     //window.location.reload();
  }
 
}
