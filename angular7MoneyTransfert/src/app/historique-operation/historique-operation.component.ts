<<<<<<< HEAD
import { Component, OnInit, ViewChild } from '@angular/core';
import { HistoriqueOp } from './historiOp';
import { DataService } from '../data.service';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';

@Component({
  selector: 'app-historique-operation',
  templateUrl: './historique-operation.component.html',
  styleUrls: ['./historique-operation.component.css']
})
export class HistoriqueOperationComponent implements OnInit {

  histo: HistoriqueOp[] ;
     errorMessage: string;
     statut:string;
     displayedColumns: string[] = [
      'caissier','montant','dateTransaction','type'];
    dataSource: MatTableDataSource<HistoriqueOp>;
    @ViewChild(MatPaginator) paginator: MatPaginator;
    @ViewChild(MatSort) sort: MatSort;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }
  getHistoOp() {
    this.data.getHistoOp().subscribe(
     data => {
       this.histo = data
       this.load(data);
       
    }, error => this.errorMessage = error,
    );
    
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

  ngOnInit() {
    this.getHistoOp();
    
  }

}
=======
import { Component, OnInit, ViewChild } from '@angular/core';
import { HistoriqueOp } from './historiOp';
import { DataService } from '../data.service';
import { MatTableDataSource, MatPaginator, MatSort } from '@angular/material';

@Component({
  selector: 'app-historique-operation',
  templateUrl: './historique-operation.component.html',
  styleUrls: ['./historique-operation.component.css']
})
export class HistoriqueOperationComponent implements OnInit {

  histo: HistoriqueOp[] ;
     errorMessage: string;
     statut:string;
     displayedColumns: string[] = [
      'caissier','montant','dateTransaction','type'];
    dataSource: MatTableDataSource<HistoriqueOp>;
    @ViewChild(MatPaginator) paginator: MatPaginator;
    @ViewChild(MatSort) sort: MatSort;
  constructor(private data: DataService) { }

  load(data){
    this.dataSource = new MatTableDataSource(data);
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
    
  }
  getHistoOp() {
    this.data.getHistoOp().subscribe(
     data => {
       this.histo = data
       this.load(data);
       
    }, error => this.errorMessage = error,
    );
    
  }
  applyFilter(filterValue: string) {
    this.dataSource.filter = filterValue.trim().toLowerCase();
    

    if (this.dataSource.paginator) {
      this.dataSource.paginator.firstPage();
    }
  }

  ngOnInit() {
    this.getHistoOp();
    
  }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
