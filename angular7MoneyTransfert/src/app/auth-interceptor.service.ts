import { HTTP_INTERCEPTORS, HttpResponse } from '@angular/common/http';
import { Injectable,Injector } from '@angular/core';
import { HttpInterceptor, HttpHandler, HttpRequest } from '@angular/common/http';
import {AuthService} from './auth.service';
import { TokenStorageService } from './token-storage.service';
import { catchError } from 'rxjs/operators';

const TOKEN_HEADER_KEY = 'Authorization';

@Injectable()
export class AuthInterceptor implements HttpInterceptor {

    constructor(private token: TokenStorageService, private injector:Injector) { }
    
    intercept(request: HttpRequest<any>, next: HttpHandler) {
        let authService = this.injector.get(AuthService)
        console.log(authService.getToken());
        let tokenizedReq=request.clone(
       {
        setHeaders: {
            'Authorization': `Bearer ${authService.getToken()}`
        }
       })
       return next.handle(tokenizedReq);
    }

    private addToken(request: HttpRequest<any>,token: string){
        return request.clone({
            setHeaders: {
                'Authorization': 'Bearer ${token}'
            }
        });
    }
}

export const httpInterceptorProviders = [
    { provide: HTTP_INTERCEPTORS, useClass: AuthInterceptor, multi: true }
];
