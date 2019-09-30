<<<<<<< HEAD
import { Component, OnInit, ViewChild } from '@angular/core';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';
import { Compte } from '../compte';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { DataService } from '../data.service';
import { PartenaireOp } from '../model/partenaireOp';

@Component({
  selector: 'app-partenaire-operation',
  templateUrl: './partenaire-operation.component.html',
  styleUrls: ['./partenaire-operation.component.css']
})
export class PartenaireOperationComponent implements OnInit {

  displayedColumns: string[] = [
    'raisonSocial','ninea','numeroCompte','solde','montant','dateDepot'];
  dataSource: MatTableDataSource<PartenaireOp>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  parteOp: PartenaireOp[] ;
     errorMessage: string;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }

  listPartOperations() {
    this.data.listOperationsPartenaires().subscribe(
     data => {
       this.parteOp = data
    this.load(data);
    }, error => this.errorMessage = error,
    );
    console.log(this.parteOp);
  }
  
  ngOnInit() {
    this.listPartOperations();
  }

  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

}
=======
import { Component, OnInit, ViewChild } from '@angular/core';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';
import { Compte } from '../compte';
import { faEdit } from '@fortawesome/free-solid-svg-icons';
import { DataService } from '../data.service';
import { PartenaireOp } from '../model/partenaireOp';

@Component({
  selector: 'app-partenaire-operation',
  templateUrl: './partenaire-operation.component.html',
  styleUrls: ['./partenaire-operation.component.css']
})
export class PartenaireOperationComponent implements OnInit {

  displayedColumns: string[] = [
    'raisonSocial','ninea','numeroCompte','solde','montant','dateDepot'];
  dataSource: MatTableDataSource<PartenaireOp>;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  @ViewChild(MatSort) sort: MatSort;
  faEdit = faEdit;
  parteOp: PartenaireOp[] ;
     errorMessage: string;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }

  listPartOperations() {
    this.data.listOperationsPartenaires().subscribe(
     data => {
       this.parteOp = data
    this.load(data);
    }, error => this.errorMessage = error,
    );
    console.log(this.parteOp);
  }
  
  ngOnInit() {
    this.listPartOperations();
  }

  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
